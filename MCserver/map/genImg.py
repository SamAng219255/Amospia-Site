import pynbt
from sys import argv
import gzip
from PIL import Image
import json


palette=[(0,0,0,0),(127, 178, 56,255),(247, 233, 163,255),(199, 199, 199,255),(255, 0, 0,255),(160, 160, 255,255),(167, 167, 167,255),(0, 124, 0,255),(255, 255, 255,255),(164, 168, 184,255),(151, 109, 77,255),(112, 112, 112,255),(64, 64, 255,255),(143, 119, 72,255),(255, 252, 245,255),(216, 127, 51,255),(178, 76, 216,255),(102, 153, 216,255),(229, 229, 51,255),(127, 204, 25,255),(242, 127, 165,255),(76, 76, 76,255),(153, 153, 153,255),(76, 127, 153,255),(127, 63, 178,255),(51, 76, 178,255),(102, 76, 51,255),(102, 127, 51,255),(153, 51, 51,255),(25, 25, 25,255),(250, 238, 77,255),(92, 219, 213,255),(74, 128, 255,255),(0, 217, 58,255),(129, 86, 49,255),(112, 2, 0,255),(209, 177, 161,255),(159, 82, 36,255),(149, 87, 108,255),(112, 108, 138,255),(186, 133, 36,255),(103, 117, 53,255),(160, 77, 78,255),(57, 41, 35,255),(135, 107, 98,255),(87, 92, 92,255),(122, 73, 88,255),(76, 62, 92,255),(76, 50, 35,255),(76, 82, 42,255),(142, 60, 46,255),(37, 22, 16,255)]
shades=[180,220,255,135]

path='/home/sam/minecraftServer/world/data/'
if(len(argv)>2):
	path=argv[2]

regionsDone={}

for i in range(int(argv[1])+1):
	try:
		f=open(path+'map_'+str(i)+'.dat', 'rb')
		nbt=pynbt.NBTFile(gzip.GzipFile(mode='r', fileobj=f))
		if nbt["data"]["scale"].value==0:
			img=Image.new("RGBA",(128,128),(0,0,0,0))
			imgData=[]
			negatives=[]
			completeness=0
			for colId in nbt["data"]["colors"].value:
				if colId<0 and colId not in negatives: negatives.append(colId)
				if colId>4: completeness+=1
				color,shade=divmod(colId,4)
				r,g,b,a=palette[color]
				shaMul=shades[shade]
				imgData.append((((r*shaMul)//255),(g*shaMul)//255,(b*shaMul)//255,a))
			if len(negatives)>0: print("Negatives "+json.dumps(negatives)+" found on "+str(i)+" at ("+str(nbt["data"]["dimension"].value//128)+", "+str(nbt["data"]["xCenter"].value//128)+", "+str(nbt["data"]["zCenter"].value//128)+").")
			img.putdata(imgData)
			key=str(nbt["data"]["xCenter"].value//128)+'_'+str(nbt["data"]["zCenter"].value//128)
			if nbt["data"]["dimension"].value==0 and key in regionsDone: print("Duplicate of "+key+" found.")
			if nbt["data"]["dimension"].value==0 and ((key in regionsDone and completeness>=regionsDone[key]) or key not in regionsDone):
				regionsDone[key]=completeness
				img.save('img/tile.'+str(nbt["data"]["dimension"].value)+'.'+str(nbt["data"]["xCenter"].value//128)+'.'+str(nbt["data"]["zCenter"].value//128)+'.png')
	except FileNotFoundError:
		print('File Not Found on '+str(i))
print(str(len(regionsDone)))