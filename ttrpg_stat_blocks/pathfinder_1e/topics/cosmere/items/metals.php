<?php 
	$startDir='';
	for($i=0; $i<5; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	block(
		'Metals',
		'intro',
		[
			'Various regions of the Cosmere possess magics requiring various amounts of specific metals. The Metallic Arts of Scadrial being the prime example. As such, here is compiled listed prices for a wide variety of metals in differing amounts and forms. For some cheaper metals, multiple of the item can be acquired for the listed price. In such cases, the number bought for the amount listed is included in parentheses.',
			'The following is a description of each entry. It should be noted that the listed prices are if a character is buying them and are rounded up as needed.',
			'<dl>
				<dt>Standard Coin</dt>
				<dd>The value of a coin of standard size (1/50th of a pound) made from the metal.</dd>
				<dt>1 Ounce</dt>
				<dd>1/16 of a pound, this is a common smaller unit used with the metal. Allomantically burning 1 ounce lasts for 4 intervals while 16 points of investiture can be feruchemically stored in it.</dd>
				<dt>1/4 Ounce</dt>
				<dd>1/64 of a pound or 4 drams, this is unit of metal expended per listed interval while allomantically burning the metal. 4 points of investiture can be feruchemically stored in this much.</dd>
				<dt>1 Dram</dt>
				<dd>1/256 of a pound or 1/16 of an ounce, exactly 1 point of investiture can be feruchemically stored in this much metal.</dd>
				<dt>Metalminds per Pound</dt>
				<dd>The price of 1 pound of basic jewelry suitable for use as metalminds. This is maximum amount that can be worn in a given slot.</dd>
				<dt>Vial per Ounce</dt>
				<dd>The price of a vial of 1 ounce worth of metal flakes that are prepared for easy ingestion for an allomancer. This is generally a similar volume to a potion and drinking a vial containing 1 ounce or less can be done as drinking a potion. It may be possible to quickly consume larger amounts at GM discretion. 1 ounce of metal last for 4 of the listed intervals.</dd>
				<dt>Metalminds per Dram</dt>
				<dd>The price of 1 dram of jewelry suitable for use as metalminds. Each dram of jewelry will store 1 point of investiture.</dd>
				<dt>Vial per 1/4 Ounce</dt>
				<dd>The price of a vial of a 1/4 ounce worth of metal flakes that are prepared for easy ingestion for an allomancer. This is the smallest practical unit and lasts for the listed interval.</dd>
				<dt>Hemalurgic Spike</dt>
				<dd>The price of a standard hemalurgic spike weighing 1/2 a pound and shaped into a distinct sharp conical spike. Smaller spike may yield diminshed results at GM discretion.</dd>
			</dl>'
		],
		true
	);
	table(
		[
			'Metal',
			'1 Pound',
			'Standard Coin',
			'1 Ounce',
			'1/4 Ounce',
			'1 Dram'
		],
		[
			[
				'Iron',// Metal
				'1 sp',// 1 Pound
				'1/5 cp',// A Standard Coin
				'1 cp',// 1 Ounce
				'1 cp (6)',// 1/4 Ounce
				'1 cp (25)',// 1 Dram
			],
			[
				'Steel',// Metal
				'1.5 sp',// 1 Pound
				'3/10 cp',// A Standard Coin
				'1 cp',// 1 Ounce
				'1 cp (4)',// 1/4 Ounce
				'1 cp (17)',// 1 Dram
			],
			[
				'Tin',// Metal
				'5 sp',// 1 Pound
				'1 cp',// A Standard Coin
				'4 cp',// 1 Ounce
				'1 cp',// 1/4 Ounce
				'1 cp (5)',// 1 Dram
			],
			[
				'Pewter',// Metal
				'5.3 sp',// 1 Pound
				'1 cp',// A Standard Coin
				'4 cp',// 1 Ounce
				'1 cp',// 1/4 Ounce
				'1 cp (5)',// 1 Dram
			],
			[
				'Zinc',// Metal
				'5 cp',// 1 Pound
				'1/10 cp',// A Standard Coin
				'1 cp (3)',// 1 Ounce
				'1 cp (12)',// 1/4 Ounce
				'1 cp (51)',// 1 Dram
			],
			[
				'Brass',// Metal
				'4.4 sp',// 1 Pound
				'6/7 cp',// A Standard Coin
				'3 cp',// 1 Ounce
				'1 cp',// 1/4 Ounce
				'1 cp (5)',// 1 Dram
			],
			[
				'Copper',// Metal
				'5 sp',// 1 Pound
				'1 cp',// A Standard Coin
				'4 cp',// 1 Ounce
				'1 cp',// 1/4 Ounce
				'1 cp (5)',// 1 Dram
			],
			[
				'Bronze',// Metal
				'5.5 sp',// 1 Pound
				'11/10 cp',// A Standard Coin
				'4 cp',// 1 Ounce
				'1 cp',// 1/4 Ounce
				'1 cp (4)',// 1 Dram
			],
			[
				'Cadmium',// Metal
				'11 gp',// 1 Pound
				'2.2 sp',// A Standard Coin
				'6.9 sp',// 1 Ounce
				'1.8 sp',// 1/4 Ounce
				'5 cp',// 1 Dram
			],
			[
				'Bendalloy',// Metal
				'6.9 gp',// 1 Pound
				'1.4 sp',// A Standard Coin
				'4.3 sp',// 1 Ounce
				'1.1 sp',// 1/4 Ounce
				'3 cp',// 1 Dram
			],
			[
				'Gold',// Metal
				'50 gp',// 1 Pound
				'1 gp',// A Standard Coin
				'3.2 gp',// 1 Ounce
				'7.9 sp',// 1/4 Ounce
				'2 sp',// 1 Dram
			],
			[
				'Electrum',// Metal
				'28 gp',// 1 Pound
				'5.6 sp',// A Standard Coin
				'1.8 gp',// 1 Ounce
				'4.4 sp',// 1/4 Ounce
				'1.1 sp',// 1 Dram
			],
			[
				'Chromium',// Metal
				'30 gp',// 1 Pound
				'6 sp',// A Standard Coin
				'1.9 gp',// 1 Ounce
				'4.7 sp',// 1/4 Ounce
				'1.2 sp',// 1 Dram
			],
			[
				'Nicrosil',// Metal
				'28 gp',// 1 Pound
				'5.6 sp',// A Standard Coin
				'1.8 gp',// 1 Ounce
				'4.4 sp',// 1/4 Ounce
				'1.1 sp',// 1 Dram
			],
			[
				'Aluminum',// Metal
				'500 gp',// 1 Pound
				'10 gp',// A Standard Coin
				'31.3 gp',// 1 Ounce
				'7.8 sp',// 1/4 Ounce
				'2 gp',// 1 Dram
			],
			[
				'Duralumin',// Metal
				'528 gp',// 1 Pound
				'10.6 gp',// A Standard Coin
				'33 gp',// 1 Ounce
				'8-1/4 sp',// 1/4 Ounce
				'2.1 gp',// 1 Dram
			],
			[
				'Atium',// Metal
				'5,000 gp',// 1 Pound
				'100 gp',// A Standard Coin
				'313 gp',// 1 Ounce
				'78.1 sp',// 1/4 Ounce
				'19.5 gp',// 1 Dram
			],
			[
				'Malatium',// Metal
				'3,350 gp',// 1 Pound
				'67 gp',// A Standard Coin
				'209 gp',// 1 Ounce
				'52.3 sp',// 1/4 Ounce
				'13.1 gp',// 1 Dram
			],
			[
				'Lead',// Metal
				'3.3 sp',// 1 Pound
				'2/3 cp',// A Standard Coin
				'2 cp',// 1 Ounce
				'1 cp',// 1/4 Ounce
				'1 cp (7)',// 1 Dram
			],
			[
				'Silver',// Metal
				'5 gp',// 1 Pound
				'1 sp',// A Standard Coin
				'3.1 sp',// 1 Ounce
				'8 cp',// 1/4 Ounce
				'2 cp',// 1 Dram
			],
			[
				'Nickel',// Metal
				'2.5 gp',// 1 Pound
				'5 cp',// A Standard Coin
				'1.6 sp',// 1 Ounce
				'4 cp',// 1/4 Ounce
				'1 cp',// 1 Dram
			],
			[
				'Bismuth',// Metal
				'10 gp',// 1 Pound
				'2 sp',// A Standard Coin
				'6.3 sp',// 1 Ounce
				'1.6 sp',// 1/4 Ounce
				'4 cp',// 1 Dram
			]
		],
		true,
		false,
		true,
		true
	);
	table(
		[
			'Metal',
			'Metalminds per Pound',
			'Ingestable Vial per Ounce',
			'Metalminds per Dram',
			'Vial per 1/4 Ounce',
			'Hemalurgic Spike'
		],
		[
			[
				'Iron',// Metal
				'2 sp',// Metalminds per Pound
				'2 cp',// Ingestable Vial per Ounce
				'1 cp (12)',// Metalminds per Dram
				'1 cp (4)',// Vial per 1/4 Ounce
				'5 cp'// Hemalurgic Spike
			],
			[
				'Steel',// Metal
				'3 sp',// Metalminds per Pound
				'2 cp',// Ingestable Vial per Ounce
				'1 cp (8)',// Metalminds per Dram
				'1 cp (2)',// Vial per 1/4 Ounce
				'8 cp'// Hemalurgic Spike
			],
			[
				'Tin',// Metal
				'1 gp',// Metalminds per Pound
				'7 cp',// Ingestable Vial per Ounce
				'1 cp (2)',// Metalminds per Dram
				'2 cp',// Vial per 1/4 Ounce
				'2.5 sp'// Hemalurgic Spike
			],
			[
				'Pewter',// Metal
				'1 gp',// Metalminds per Pound
				'7 cp',// Ingestable Vial per Ounce
				'1 cp (2)',// Metalminds per Dram
				'2 cp',// Vial per 1/4 Ounce
				'2.7 sp'// Hemalurgic Spike
			],
			[
				'Zinc',// Metal
				'1 sp',// Metalminds per Pound
				'1 cp',// Ingestable Vial per Ounce
				'1 cp (25)',// Metalminds per Dram
				'1 cp (8)',// Vial per 1/4 Ounce
				'3 cp'// Hemalurgic Spike
			],
			[
				'Brass',// Metal
				'8.7 sp',// Metalminds per Pound
				'6 cp',// Ingestable Vial per Ounce
				'1 cp (2)',// Metalminds per Dram
				'2 cp',// Vial per 1/4 Ounce
				'2.2 sp'// Hemalurgic Spike
			],
			[
				'Copper',// Metal
				'1 gp',// Metalminds per Pound
				'7 cp',// Ingestable Vial per Ounce
				'1 cp (2)',// Metalminds per Dram
				'2 cp',// Vial per 1/4 Ounce
				'2.5 sp'// Hemalurgic Spike
			],
			[
				'Bronze',// Metal
				'1.1 gp',// Metalminds per Pound
				'7 cp',// Ingestable Vial per Ounce
				'1 cp (2)',// Metalminds per Dram
				'2 cp',// Vial per 1/4 Ounce
				'2.8 sp'// Hemalurgic Spike
			],
			[
				'Cadmium',// Metal
				'22 gp',// Metalminds per Pound
				'1.38 gp',// Ingestable Vial per Ounce
				'9 cp',// Metalminds per Dram
				'2.6 sp',// Vial per 1/4 Ounce
				'5.5 gp'// Hemalurgic Spike
			],
			[
				'Bendalloy',// Metal
				'13.8 gp',// Metalminds per Pound
				'8.6 sp',// Ingestable Vial per Ounce
				'6 cp',// Metalminds per Dram
				'1.7 sp',// Vial per 1/4 Ounce
				'3.44 gp'// Hemalurgic Spike
			],
			[
				'Gold',// Metal
				'100 gp',// Metalminds per Pound
				'6.26 gp',// Ingestable Vial per Ounce
				'4 sp',// Metalminds per Dram
				'1.2 gp',// Vial per 1/4 Ounce
				'25 gp'// Hemalurgic Spike
			],
			[
				'Electrum',// Metal
				'56 gp',// Metalminds per Pound
				'3.5 gp',// Ingestable Vial per Ounce
				'2.2 sp',// Metalminds per Dram
				'6.6 sp',// Vial per 1/4 Ounce
				'14 gp'// Hemalurgic Spike
			],
			[
				'Chromium',// Metal
				'60 gp',// Metalminds per Pound
				'3.8 gp',// Ingestable Vial per Ounce
				'2.4 sp',// Metalminds per Dram
				'7.1 sp',// Vial per 1/4 Ounce
				'15 gp'// Hemalurgic Spike
			],
			[
				'Nicrosil',// Metal
				'56 gp',// Metalminds per Pound
				'3.5 gp',// Ingestable Vial per Ounce
				'2.2 sp',// Metalminds per Dram
				'6.6 sp',// Vial per 1/4 Ounce
				'14 gp'// Hemalurgic Spike
			],
			[
				'Aluminum',// Metal
				'1,000 gp',// Metalminds per Pound
				'62.6 gp',// Ingestable Vial per Ounce
				'3.9 gp',// Metalminds per Dram
				'11.7 gp',// Vial per 1/4 Ounce
				'250 gp'// Hemalurgic Spike
			],
			[
				'Duralumin',// Metal
				'1,060 gp',// Metalminds per Pound
				'66 gp',// Ingestable Vial per Ounce
				'4.2 gp',// Metalminds per Dram
				'12.4 gp',// Vial per 1/4 Ounce
				'264 gp'// Hemalurgic Spike
			],
			[
				'Atium',// Metal
				'10,000 gp',// Metalminds per Pound
				'626 gp',// Ingestable Vial per Ounce
				'39.1 gp',// Metalminds per Dram
				'117 gp',// Vial per 1/4 Ounce
				'2,500 gp'// Hemalurgic Spike
			],
			[
				'Malatium',// Metal
				'6,700 gp',// Metalminds per Pound
				'418 gp',// Ingestable Vial per Ounce
				'26.2 gp',// Metalminds per Dram
				'78.5 gp',// Vial per 1/4 Ounce
				'1,680 gp'// Hemalurgic Spike
			]
		],
		true,
		false,
		true,
		true
	);
	require $startDir.'pageEnd.php';
?>