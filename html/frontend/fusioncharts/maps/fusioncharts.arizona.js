/*
 * @license FusionCharts JavaScript Library
 * Copyright FusionCharts Technologies LLP
 * License Information at <http://www.fusioncharts.com/license>
 *
 * @author FusionCharts Technologies LLP
 * @meta package_map_pack core
 * @id fusionmaps.Arizona.20.10-30-2012 06:07:20
 */
FusionCharts(["private","modules.renderer.js-arizona",function(){var p=this,k=p.hcLib,n=k.chartAPI,h=k.moduleCmdQueue,a=k.injectModuleDependency,i="M",j="L",c="Z",f="Q",b="left",q="right",t="center",v="middle",o="top",m="bottom",s="maps",l=true&&!/fusioncharts\.com$/i.test(location.hostname),r=!!n.geo,d,e,u,g;
d=[{name:"Arizona",revision:20,standaloneInit:true,baseWidth:576,baseHeight:681,baseScaleFactor:10,entities:{"003":{outlines:[[i,5707,5509,j,4311,5509,4305,6769,5707,6768,c]],label:"Cochise",shortLabel:"CO",labelPosition:[500.6,613.9],labelAlignment:[t,v]},"023":{outlines:[[i,3615,6321,j,3615,6554,3412,6554,3412,6674,3675,6770,4305,6770,4307,6321,c]],label:"Santa Cruz",shortLabel:"SC",labelPosition:[385.9,654.5],labelAlignment:[t,v]},"019":{outlines:[[i,3615,6554,j,3615,6321,4307,6321,4311,5420,1485,5420,1485,5974,3412,6674,3412,6554,c]],label:"Pima",shortLabel:"PI",labelPosition:[294.8,583.8],labelAlignment:[t,v]},"011":{outlines:[[i,5409,3946,f,5410,3957,5406,3967,5397,3997,5366,4005,5356,4007,5347,4010,5334,4014,5319,4015,5310,4016,5303,4019,5301,4020,5299,4020,5297,4021,5295,4023,5288,4029,5285,4037,5281,4048,5277,4056,5276,4058,5274,4059,5267,4062,5266,4072,j,5266,4731,f,5267,4739,5267,4744,5268,4750,5267,4751,5266,4753,5267,4755,5271,4766,5277,4776,5278,4778,5279,4780,5280,4783,5280,4785,5287,4805,5298,4827,5303,4837,5308,4842,5309,4844,5310,4846,5311,4848,5312,4850,5321,4861,5325,4872,5329,4881,5337,4889,5339,4891,5341,4894,5342,4897,5344,4900,5349,4908,5353,4916,5362,4935,5371,4951,5388,4979,5396,5001,5400,5011,5405,5018,5407,5020,5408,5022,5410,5024,5413,5025,5431,5026,5447,5029,5448,5029,5449,5031,5449,5034,5451,5034,5454,5036,5455,5042,5459,5060,5461,5079,5463,5093,5469,5106,5471,5109,5475,5111,5477,5112,5479,5113,5482,5114,5485,5114,5489,5115,5492,5117,5495,5118,5498,5119,5510,5122,5515,5135,5515,5137,5516,5139,5531,5162,5537,5196,5540,5214,5539,5233,5536,5263,5541,5286,5543,5297,5544,5308,5547,5326,5547,5343,5548,5358,5536,5369,5534,5371,5532,5374,5529,5377,5528,5384,5528,5385,5526,5386,5525,5387,5523,5387,5523,5390,5524,5392,5531,5406,5544,5410,5547,5410,5548,5412,5555,5417,5567,5427,5583,5440,5592,5455,5594,5457,5594,5459,5597,5465,5601,5468,5617,5480,5630,5503,5633,5508,5636,5510,j,5707,5510,5707,3931,5408,3931,f,5408,3939,5409,3946,c]],label:"Greenlee",shortLabel:"GE",labelPosition:[548.5,472],labelAlignment:[t,v]},"009":{outlines:[[i,5255,4089,f,5253,4090,5251,4092,5243,4100,5231,4103,5228,4104,5224,4105,5220,4106,5215,4107,5214,4107,5212,4107,5203,4107,5196,4111,5185,4117,5177,4124,5171,4129,5166,4136,5160,4143,5149,4143,5143,4143,5137,4145,5123,4148,5115,4158,5104,4175,5091,4190,5079,4205,5061,4217,5048,4227,5040,4238,5035,4246,5025,4254,5018,4260,5010,4263,5003,4267,4996,4270,4994,4271,4992,4271,4986,4272,4980,4273,4969,4274,4964,4271,4962,4271,4962,4268,4959,4257,4949,4253,4947,4252,4946,4250,4937,4235,4927,4220,4914,4202,4896,4187,4889,4181,4879,4179,4876,4179,4872,4178,4872,4178,4872,4178,4854,4174,4835,4171,4806,4167,4776,4165,4772,4165,4766,4162,j,4766,4303,4610,4303,f,4603,4313,4594,4319,4592,4321,4590,4321,4582,4322,4578,4325,4576,4327,4574,4328,4572,4329,4569,4330,4565,4332,4559,4331,4551,4330,4543,4329,4540,4329,4538,4327,4534,4324,4528,4326,4516,4331,4496,4341,4493,4343,4490,4344,4487,4344,4484,4345,4477,4349,4465,4348,4457,4347,4449,4346,4440,4344,4434,4351,4427,4360,4420,4372,4417,4378,4408,4381,4405,4382,4404,4380,4398,4375,4393,4372,4389,4370,4383,4371,4376,4372,4373,4378,4369,4385,4364,4388,4363,4390,4361,4390,4329,4388,4326,4413,4325,4417,4325,4420,4324,4424,4323,4428,4322,4431,4322,4432,4325,4453,4327,4473,4328,4495,4326,4517,4325,4529,4330,4535,4332,4537,4332,4539,4333,4542,4335,4543,4341,4547,4341,4561,4341,4562,4340,4564,4337,4573,4343,4579,4352,4588,4356,4598,4357,4600,4357,4602,4357,4615,4339,4611,4329,4609,4326,4613,4322,4619,4315,4620,j,4310,5510,5636,5510,f,5633,5507,5630,5502,5617,5479,5601,5468,5597,5464,5594,5459,5594,5457,5592,5455,5583,5440,5567,5426,5555,5416,5548,5411,5547,5410,5544,5409,5531,5405,5524,5392,5523,5389,5523,5386,5525,5386,5526,5386,5528,5385,5528,5383,5529,5377,5532,5373,5534,5371,5536,5368,5548,5358,5547,5342,5547,5325,5544,5308,5543,5296,5541,5286,5536,5263,5539,5232,5540,5214,5537,5196,5531,5162,5516,5139,5515,5137,5515,5135,5510,5121,5498,5119,5495,5118,5492,5116,5489,5115,5485,5114,5482,5113,5479,5112,5477,5112,5475,5111,5471,5108,5469,5105,5463,5093,5461,5079,5459,5060,5455,5041,5454,5035,5451,5034,5449,5033,5449,5031,5448,5028,5447,5028,5431,5025,5413,5024,5410,5024,5408,5021,5407,5019,5405,5017,5400,5011,5396,5001,5388,4979,5371,4950,5362,4934,5353,4916,5349,4908,5344,4900,5342,4897,5341,4893,5339,4890,5337,4888,5329,4881,5325,4871,5321,4861,5312,4850,5311,4848,5310,4846,5309,4843,5308,4842,5303,4836,5298,4827,5287,4805,5280,4784,5280,4782,5279,4780,5278,4777,5277,4775,5271,4766,5267,4755,5266,4752,5267,4750,5268,4749,5268,4748,j,5266,4730,5266,4072,f,5261,4079,5258,4086,f,5257,4089,5255,4089,c]],label:"Graham",shortLabel:"GR",labelPosition:[474.3,496.1],labelAlignment:[t,v]},"021":{outlines:[[i,3743,4319,f,3742,4317,3742,4316,3742,4307,3744,4297,j,3224,4297,3205,4319,3205,4602,2746,4602,f,2744,4603,2739,4603,2728,4603,2718,4598,2705,4592,2698,4586,2697,4584,2696,4582,2694,4577,2689,4577,2686,4576,2684,4575,2682,4573,2676,4571,2673,4570,2672,4569,2670,4564,2663,4561,2641,4549,2620,4535,2615,4531,2614,4526,2610,4505,2593,4496,2589,4500,2583,4505,j,2582,4505,2583,4506,2583,4507,f,2584,4507,2584,4508,2587,4510,2585,4510,j,2585,5420,4311,5420,4315,4620,f,4309,4621,4302,4619,4299,4619,4295,4619,4278,4618,4274,4633,4273,4639,4267,4642,4244,4655,4223,4676,4204,4695,4183,4683,4181,4682,4179,4681,4176,4679,4174,4676,4167,4668,4157,4668,4153,4674,4150,4683,4149,4685,4149,4686,4149,4705,4129,4701,4126,4701,4123,4700,4098,4697,4099,4721,4099,4732,4088,4737,4085,4738,4083,4741,4078,4748,4066,4752,4066,4754,4066,4755,4068,4757,4068,4759,4069,4770,4069,4781,4069,4787,4067,4792,4060,4806,4048,4815,4032,4828,4013,4828,3996,4828,3987,4816,3981,4807,3973,4796,3969,4789,3967,4781,3964,4773,3962,4765,3961,4763,3960,4761,3956,4747,3952,4734,3952,4732,3951,4730,3945,4712,3934,4696,3926,4685,3922,4677,3917,4667,3912,4658,3911,4657,3910,4654,3909,4652,3908,4650,3904,4644,3900,4633,3896,4622,3889,4608,3884,4600,3877,4593,3875,4591,3873,4588,3867,4580,3856,4574,3853,4572,3851,4569,3843,4559,3839,4549,3837,4543,3835,4538,3832,4533,3831,4526,3831,4523,3830,4520,3821,4500,3810,4480,3806,4471,3801,4462,3799,4459,3798,4455,3798,4453,3797,4451,3795,4435,3792,4420,3792,4417,3791,4413,3789,4393,3781,4375,3773,4357,3759,4341,f,3750,4330,3743,4319,c]],label:"Pinal",shortLabel:"PN",labelPosition:[344.8,485.8],labelAlignment:[t,v]},"013":{outlines:[[i,2685,3615,f,2657,3610,2638,3623,2637,3624,2635,3626,2622,3651,2609,3676,2604,3687,2595,3696,2587,3705,2576,3711,2569,3715,2569,3726,2569,3729,2568,3732,2565,3736,2565,3745,2564,3748,2563,3751,2553,3769,2539,3780,2524,3792,2503,3792,2475,3792,2448,3782,2403,3766,2356,3754,2339,3750,2322,3742,2320,3741,2315,3740,2283,3731,2252,3720,2209,3705,2164,3697,2161,3696,2158,3696,2149,3695,2143,3691,2131,3683,2117,3681,2114,3681,2111,3681,2100,3681,2095,3676,2089,3671,2095,3670,j,1485,3670,1485,5420,2585,5420,2585,4510,f,2587,4510,2584,4507,2584,4507,2583,4506,j,2583,4506,2582,4505,f,2582,4505,2582,4505,2589,4500,2593,4496,2610,4505,2614,4526,2615,4531,2620,4535,2641,4549,2663,4561,2670,4564,2672,4569,2673,4570,2676,4571,2682,4573,2684,4575,2686,4576,2689,4577,2694,4577,2696,4582,2697,4584,2698,4586,2705,4592,2718,4598,2728,4603,2739,4603,2744,4603,2746,4602,j,3205,4602,3205,4319,3224,4297,3744,4297,f,3746,4288,3749,4278,3750,4275,3749,4273,3748,4271,3747,4269,3746,4266,3745,4264,3737,4254,3733,4244,3729,4238,3727,4229,3726,4227,3725,4225,3721,4211,3719,4197,3714,4170,3694,4149,3669,4124,3651,4094,3649,4090,3649,4084,3649,4072,3645,4062,3644,4060,3643,4060,3627,4058,3618,4072,3616,4075,3614,4077,3605,4086,3595,4100,3594,4101,3594,4103,3589,4116,3577,4123,3573,4125,3569,4121,3557,4111,3552,4102,3550,4100,3548,4098,3535,4090,3523,4085,3511,4079,3496,4073,3478,4065,3465,4051,3455,4040,3451,4024,3447,4006,3445,3987,3445,3984,3444,3981,3444,3979,3443,3977,3439,3967,3424,3963,3422,3963,3420,3963,3409,3961,3405,3949,3402,3940,3403,3930,3403,3929,3403,3927,3403,3925,3403,3924,3403,3921,3402,3919,3399,3911,3403,3902,3404,3885,3401,3868,3395,3838,3385,3808,3381,3795,3372,3788,3362,3780,3350,3773,3335,3765,3334,3753,3332,3728,3340,3700,3346,3681,3338,3673,3323,3657,3298,3657,3297,3658,3297,3658,3296,3660,3295,3661,3289,3666,3282,3668,3280,3668,3278,3668,3255,3670,3231,3669,3214,3669,3203,3669,3190,3670,3178,3670,3170,3670,3162,3671,3141,3674,3109,3671,3107,3671,3106,3671,3098,3670,3090,3669,3085,3668,3081,3667,3070,3665,3059,3664,3026,3663,2993,3664,2968,3664,2946,3660,2939,3659,2934,3656,2932,3656,2929,3655,2916,3650,2902,3647,2899,3646,2895,3646,2852,3649,2810,3636,2808,3635,2805,3634,2802,3632,2798,3630,2782,3622,2764,3618,2761,3618,2757,3618,2728,3616,2698,3616,f,2691,3616,2685,3615,c]],label:"Maricopa",shortLabel:"MA",labelPosition:[214.7,425.7],labelAlignment:[t,v]},"027":{outlines:[[i,860,4300,j,565,4300,549,4809,320,4809,f,320,4809,320,4810,319,4812,318,4815,317,4817,317,4818,317,4820,319,4821,326,4828,340,4835,342,4840,345,4843,349,4847,351,4856,353,4865,353,4875,357,4919,372,4963,374,4967,374,4972,374,4974,374,4975,372,4991,364,5004,363,5007,362,5010,361,5013,361,5016,360,5025,356,5031,339,5054,325,5064,324,5065,323,5067,316,5077,314,5091,313,5096,312,5100,311,5102,311,5104,310,5107,308,5109,288,5128,265,5144,244,5159,220,5169,208,5175,193,5176,185,5177,183,5170,182,5168,180,5167,169,5160,160,5149,159,5148,156,5148,144,5150,136,5157,134,5159,132,5161,131,5164,130,5166,124,5177,118,5195,107,5225,83,5248,78,5252,71,5253,69,5253,68,5255,55,5272,40,5286,37,5289,30,5290,19,5291,19,5302,19,5303,19,5305,18,5314,23,5318,26,5321,28,5323,30,5325,33,5327,49,5335,41,5356,40,5358,39,5361,38,5363,38,5365,36,5370,37,5377,39,5396,30,5412,22,5425,20,5441,20,5441,20,5442,j,1485,5974,1485,4404,860,4404,c]],label:"Yuma",shortLabel:"YU",labelPosition:[94.2,507.7],labelAlignment:[t,v]},"007":{outlines:[[i,3141,3237,f,3140,3240,3139,3242,3133,3251,3131,3265,3131,3268,3130,3271,3128,3274,3127,3280,3127,3291,3122,3302,3123,3304,3124,3306,3125,3309,3125,3312,3126,3315,3127,3318,3129,3326,3128,3333,3125,3350,3116,3364,3109,3378,3101,3393,3103,3403,3103,3412,3103,3427,3098,3439,3094,3447,3083,3456,3081,3458,3078,3460,3073,3466,3071,3475,3081,3480,3096,3477,3098,3477,3099,3477,3121,3475,3143,3475,3174,3475,3203,3479,3208,3480,3212,3480,3226,3483,3241,3485,3245,3486,3250,3487,3261,3488,3272,3487,3280,3486,3288,3484,3295,3482,3294,3488,3294,3492,3295,3497,3296,3499,3298,3499,3314,3503,3319,3525,3319,3529,3318,3531,3309,3549,3307,3572,3306,3585,3316,3591,3318,3593,3318,3595,3319,3598,3321,3599,3327,3606,3322,3613,3321,3615,3319,3615,3313,3618,3307,3620,3305,3621,3303,3622,3300,3623,3298,3624,3296,3626,3294,3628,3290,3632,3297,3638,3299,3640,3299,3642,3302,3650,3298,3657,3323,3657,3338,3673,3346,3681,3340,3700,3332,3728,3334,3753,3335,3765,3350,3773,3362,3780,3372,3788,3381,3795,3385,3808,3395,3838,3401,3868,3404,3885,3403,3902,3399,3911,3402,3919,3403,3921,3403,3924,3403,3925,3403,3927,3403,3929,3403,3930,3402,3940,3405,3949,3409,3961,3420,3963,3422,3963,3424,3963,3439,3967,3443,3977,3444,3979,3444,3981,3445,3984,3445,3987,3447,4006,3451,4024,3455,4040,3465,4051,3478,4065,3496,4073,3511,4079,3523,4085,3535,4090,3548,4098,3550,4100,3552,4102,3557,4111,3569,4121,3573,4125,3577,4123,3589,4116,3594,4103,3594,4101,3595,4100,3605,4086,3614,4077,3616,4075,3618,4072,3627,4058,3643,4060,3644,4060,3645,4062,3649,4072,3649,4084,3649,4090,3651,4094,3669,4124,3694,4149,3714,4170,3719,4197,3721,4211,3725,4225,3726,4227,3727,4229,3729,4238,3733,4244,3737,4254,3745,4264,3746,4266,3747,4269,3748,4271,3749,4273,3750,4275,3749,4278,3746,4288,3744,4297,3742,4307,3742,4316,3742,4317,3743,4319,3750,4330,3759,4341,3773,4357,3781,4375,3789,4393,3791,4413,3792,4417,3792,4420,3795,4435,3797,4451,3798,4453,3798,4455,3799,4459,3801,4462,3806,4471,3810,4480,3821,4500,3830,4520,3831,4523,3831,4526,3832,4533,3835,4538,3837,4543,3839,4549,3843,4559,3851,4569,3853,4572,3856,4574,3867,4580,3873,4588,3875,4591,3877,4593,3884,4600,3889,4608,3896,4622,3900,4633,3904,4644,3908,4650,3909,4652,3910,4654,3911,4657,3912,4658,3917,4667,3922,4677,3926,4685,3934,4696,3945,4712,3951,4730,3952,4732,3952,4734,3956,4747,3960,4761,3961,4763,3962,4765,3964,4773,3967,4781,3969,4789,3973,4796,3981,4807,3987,4816,3996,4828,4013,4828,4032,4828,4048,4815,4060,4806,4067,4792,4069,4787,4069,4781,4069,4770,4068,4759,4068,4757,4066,4755,4066,4754,4066,4752,4078,4748,4083,4741,4085,4738,4088,4737,4099,4732,4099,4721,4098,4697,4123,4700,4126,4701,4129,4701,4149,4705,4149,4686,4149,4685,4150,4683,4153,4674,4157,4668,4167,4668,4174,4676,4176,4679,4179,4681,4181,4682,4183,4683,4204,4695,4223,4676,4244,4655,4267,4642,4273,4639,4274,4633,4278,4618,4295,4619,4299,4619,4302,4619,4309,4621,4315,4620,4322,4619,4326,4613,4329,4609,4339,4611,4357,4615,4357,4602,4357,4600,4356,4598,4352,4588,4343,4579,4337,4573,4340,4564,4341,4562,4341,4561,4341,4547,4335,4543,4333,4542,4332,4539,4332,4537,4330,4535,4325,4529,4326,4517,4328,4495,4327,4473,4325,4453,4322,4432,4322,4431,4323,4428,4324,4424,4325,4420,4325,4417,4326,4413,4329,4388,4361,4390,4363,4390,4364,4388,4369,4385,4373,4378,4376,4372,4383,4371,4389,4370,4393,4372,4398,4375,4404,4380,4405,4382,4408,4381,4417,4378,4420,4372,4427,4360,4434,4351,4440,4344,4449,4346,4457,4347,4465,4348,4477,4349,4484,4345,4487,4344,4490,4344,4493,4343,4496,4341,4516,4331,4528,4326,4534,4324,4538,4327,4540,4329,4543,4329,4551,4330,4559,4331,4565,4332,4569,4330,4572,4329,4574,4328,4576,4327,4578,4325,4582,4322,4590,4321,4592,4321,4594,4319,4603,4313,4610,4303,j,4766,4303,4766,3659,4015,3659,4015,3327,f,4010,3329,4007,3330,3997,3332,3988,3326,3980,3321,3971,3316,3969,3315,3966,3315,3951,3316,3951,3334,3951,3344,3944,3350,3940,3353,3932,3351,3914,3347,3906,3331,3905,3329,3903,3328,3894,3324,3885,3319,3866,3307,3846,3293,3837,3287,3828,3280,3820,3276,3812,3272,3789,3263,3768,3251,3757,3244,3743,3245,3740,3246,3738,3244,3730,3237,3721,3227,3720,3225,3719,3223,3717,3215,3709,3215,3706,3214,3703,3213,3701,3213,3699,3213,3685,3213,3671,3214,3658,3215,3653,3208,3651,3204,3647,3202,3629,3191,3608,3183,3593,3178,3579,3169,3564,3159,3549,3149,3538,3142,3523,3140,3511,3137,3501,3142,3498,3144,3496,3146,3487,3155,3476,3160,3472,3163,3467,3165,3463,3168,3455,3166,3453,3166,3451,3165,3438,3158,3426,3154,3423,3153,3420,3154,3407,3155,3404,3162,3396,3180,3396,3202,3396,3205,3395,3208,3393,3211,3391,3213,3389,3214,3386,3215,3379,3219,3370,3214,3368,3213,3366,3212,3363,3210,3363,3208,3363,3189,3361,3171,3360,3163,3352,3159,3338,3153,3323,3156,3307,3160,3292,3159,3274,3158,3256,3150,3253,3149,3250,3148,3249,3150,3249,3152,j,3248,3152,f,3248,3153,3247,3154,3238,3167,3222,3174,3212,3179,3203,3183,3200,3185,3197,3187,3187,3197,3175,3203,3173,3204,3171,3204,3159,3209,3153,3218,3151,3221,3149,3223,3145,3227,3142,3233,f,3142,3235,3141,3237,c]],label:"Gila",shortLabel:"GI",labelPosition:[405.9,398.3],labelAlignment:[t,v]},"025":{outlines:[[i,2236,2188,f,2233,2194,2226,2188,2215,2180,2209,2166,2208,2163,2205,2161,2200,2155,2197,2147,2192,2136,2184,2128,2183,2127,2183,2125,2182,2124,2172,2126,2167,2127,2162,2128,2159,2128,2158,2127,2150,2119,2145,2109,2140,2101,2125,2105,2123,2105,2121,2105,2116,2107,2110,2108,2103,2110,2096,2109,2093,2108,2090,2108,2084,2107,2078,2106,2075,2105,2071,2105,2064,2105,2062,2101,2062,2101,2062,2100,2049,2100,2037,2100,2034,2100,2031,2099,2020,2094,2011,2088,1998,2079,1974,2078,1961,2078,1949,2071,1945,2069,1939,2068,1921,2064,1902,2065,1899,2065,1889,2063,1884,2063,1881,2061,1856,2050,1846,2025,1845,2022,1844,2020,1840,2016,1838,2007,1837,2005,1836,2003,1832,1996,1820,1997,1817,1997,1815,1995,1799,1983,1782,1971,1781,1970,1780,1968,1776,1958,1757,1954,1713,1944,1685,1918,1672,1906,1658,1895,1648,1886,1641,1877,1635,1870,1625,1866,1622,1865,1620,1863,1614,1860,1607,1863,1590,1870,1578,1859,1577,1857,1575,1857,1572,1856,1569,1855,1557,1849,1550,1843,1549,1841,1546,1841,1544,1840,1542,1838,1534,1832,1522,1835,1519,1835,1515,1835,1501,1836,1486,1834,j,1486,3670,2096,3670,2096,3676,f,2101,3681,2112,3681,2115,3681,2118,3681,2132,3683,2144,3691,2150,3695,2159,3696,2162,3696,2165,3697,2210,3705,2253,3720,2284,3731,2316,3740,2321,3741,2323,3742,2340,3750,2357,3754,2404,3766,2449,3782,2476,3792,2504,3792,2525,3792,2540,3780,2554,3769,2564,3751,2565,3748,2566,3745,2566,3736,2569,3732,2570,3729,2570,3726,2570,3715,2577,3711,2588,3705,2596,3696,2605,3687,2610,3676,2623,3651,2636,3626,2638,3624,2639,3623,2658,3610,2686,3615,2692,3616,2699,3616,2729,3616,2758,3618,2762,3618,2765,3618,2783,3622,2799,3630,2803,3632,2806,3634,2809,3635,2811,3636,2853,3649,2896,3646,2900,3646,2903,3647,2917,3650,2930,3655,2933,3656,2935,3656,2940,3659,2947,3660,2969,3664,2994,3664,3027,3663,3060,3664,3071,3665,3082,3667,3086,3668,3091,3669,3099,3670,3107,3671,3108,3671,3110,3671,3142,3674,3163,3671,3171,3670,3179,3670,3191,3670,3204,3669,3215,3669,3232,3669,3256,3670,3279,3668,3281,3668,3283,3668,3290,3666,3296,3661,3297,3660,3298,3658,3298,3658,3299,3657,3303,3650,3300,3642,3300,3640,3298,3638,3291,3632,3295,3628,3297,3626,3299,3624,3301,3623,3304,3622,3306,3621,3308,3620,3314,3618,3320,3615,3322,3615,3323,3613,3328,3606,3322,3599,3320,3598,3319,3595,3319,3593,3317,3591,3307,3585,3308,3572,3310,3549,3319,3531,3320,3529,3320,3525,3315,3503,3299,3499,3297,3499,3296,3497,3295,3492,3295,3488,3296,3482,3289,3484,3281,3486,3273,3487,3262,3488,3251,3487,3246,3486,3242,3485,3227,3483,3213,3480,3209,3480,3204,3479,3175,3475,3144,3475,3122,3475,3100,3477,3099,3477,3097,3477,3082,3480,3072,3475,3074,3466,3079,3460,3082,3458,3084,3456,3095,3447,3099,3439,3104,3427,3104,3412,3104,3403,3102,3393,3110,3378,3117,3364,3126,3350,3129,3333,3130,3326,3128,3318,3127,3315,3126,3312,3126,3309,3125,3306,3124,3304,3123,3302,3128,3291,3128,3280,3129,3274,3131,3271,3132,3268,3132,3265,3134,3251,3140,3242,3141,3240,3142,3237,3143,3235,3143,3233,3146,3227,3150,3223,3152,3221,3154,3218,3160,3209,3172,3204,3174,3204,3176,3203,3188,3197,3198,3187,3201,3185,3204,3183,3213,3179,3223,3174,3239,3167,3248,3154,3249,3153,3249,3152,3249,3152,3249,3152,3250,3150,3251,3148,3250,3150,3249,3148,3248,3147,3244,3146,3241,3145,3240,3145,j,3240,2697,3017,2697,3017,2508,2465,2508,2465,2301,2367,2301,2364,2188,c]],label:"Yavapai",shortLabel:"YA",labelPosition:[216.6,298.3],labelAlignment:[t,v]},"012":{outlines:[[i,1312,3302,f,1287,3313,1267,3331,1245,3351,1234,3364,1221,3381,1210,3390,1209,3392,1207,3392,1204,3393,1201,3395,1197,3397,1188,3396,1185,3396,1182,3397,1179,3399,1173,3399,1170,3399,1167,3401,1163,3404,1154,3404,1152,3404,1150,3405,1148,3406,1145,3407,1140,3410,1132,3410,1120,3411,1116,3406,1115,3404,1112,3404,1110,3403,1108,3401,1099,3393,1088,3386,1085,3384,1081,3383,1068,3381,1053,3382,1052,3382,1050,3383,1047,3384,1044,3385,1041,3387,1034,3388,1031,3389,1028,3389,1016,3392,1003,3393,1000,3393,998,3395,992,3398,987,3393,984,3390,983,3384,983,3382,983,3381,982,3372,975,3370,973,3370,972,3370,951,3370,931,3364,909,3359,888,3361,860,3363,833,3369,812,3373,797,3362,773,3345,759,3320,755,3313,749,3312,744,3312,740,3310,738,3310,736,3310,729,3310,721,3311,709,3312,700,3310,699,3326,697,3337,697,3339,697,3341,695,3348,694,3356,694,3357,692,3359,685,3366,674,3368,665,3370,660,3377,658,3379,656,3382,653,3384,651,3387,638,3399,630,3407,625,3413,620,3419,599,3446,572,3464,567,3467,561,3469,558,3470,554,3471,541,3472,534,3480,532,3483,530,3485,515,3495,507,3506,500,3514,486,3517,465,3522,445,3532,417,3546,404,3573,393,3596,389,3623,386,3638,380,3651,369,3674,354,3695,347,3704,340,3713,329,3726,313,3730,301,3733,301,3751,301,3756,305,3759,306,3761,308,3763,311,3767,312,3771,317,3792,318,3814,319,3833,314,3852,313,3856,312,3861,311,3873,314,3878,316,3880,316,3883,325,3925,324,3971,324,3977,324,3984,325,3992,327,3997,328,4001,328,4006,325,4030,316,4051,311,4064,310,4078,309,4105,304,4130,300,4152,293,4172,291,4178,292,4184,294,4192,294,4200,294,4207,290,4212,274,4240,258,4267,248,4285,236,4301,226,4313,212,4323,209,4325,207,4329,206,4332,205,4335,204,4338,204,4341,203,4346,202,4351,200,4356,194,4358,192,4359,190,4360,181,4364,176,4358,175,4356,172,4353,170,4351,168,4348,165,4348,163,4349,146,4365,131,4383,129,4385,127,4388,124,4390,124,4392,121,4403,124,4413,129,4428,133,4443,135,4454,130,4465,126,4476,124,4487,121,4502,128,4515,131,4520,136,4524,150,4534,150,4553,j,150,4553,f,152,4557,153,4561,163,4584,156,4614,154,4624,150,4637,149,4640,150,4643,151,4654,148,4659,146,4661,147,4664,148,4673,145,4676,143,4677,143,4680,142,4683,141,4686,127,4731,141,4771,144,4778,149,4781,156,4785,168,4788,174,4790,176,4792,182,4800,189,4807,190,4809,193,4809,207,4809,219,4803,222,4801,225,4800,244,4795,266,4795,275,4796,284,4794,298,4792,307,4795,310,4796,312,4797,314,4798,316,4799,319,4801,322,4803,j,322,4809,549,4809,565,4300,860,4300,860,4404,1485,4404,1485,3317,f,1473,3310,1467,3314,1458,3320,1448,3321,1432,3323,1415,3319,1386,3314,1358,3315,1355,3315,1352,3316,1348,3318,1345,3315,1336,3309,1327,3305,1325,3304,1323,3303,f,1317,3301,1312,3302,c]],label:"La Paz",shortLabel:"LP",labelPosition:[88.4,383.5],labelAlignment:[t,v]},"001":{outlines:[[i,4828,1690,f,4849,1690,4870,1690,j,4916,1690,4908,2602,4908,3931,4872,3931,4872,4178,f,4872,4178,4873,4178,4876,4179,4879,4179,4889,4181,4896,4187,4914,4202,4927,4220,4937,4235,4946,4250,4947,4252,4949,4253,4959,4257,4962,4268,4962,4271,4964,4271,4969,4274,4980,4273,4986,4272,4992,4271,4994,4271,4996,4270,5003,4267,5010,4263,5018,4260,5025,4254,5035,4246,5040,4238,5048,4227,5061,4217,5079,4205,5091,4190,5104,4175,5115,4158,5123,4148,5137,4145,5143,4143,5149,4143,5160,4143,5166,4136,5171,4129,5177,4124,5185,4117,5196,4111,5203,4107,5212,4107,5214,4107,5215,4107,5220,4106,5224,4105,5228,4104,5231,4103,5243,4100,5251,4092,5253,4090,5255,4089,5257,4089,5258,4086,5261,4079,5266,4072,5267,4062,5274,4058,5276,4057,5277,4055,5281,4048,5285,4037,5288,4028,5295,4022,5297,4021,5299,4020,5301,4019,5303,4018,5310,4015,5319,4015,5334,4014,5347,4010,5356,4007,5366,4004,5397,3996,5406,3967,5410,3957,5409,3946,5408,3938,5408,3930,j,5707,3930,5707,50,4765,50,4765,1689,c]],label:"Apache",shortLabel:"AP",labelPosition:[523.6,216.1],labelAlignment:[t,v]},"017":{outlines:[[i,4765,1689,j,4765,50,4015,50,4015,3659,4766,3659,4766,4162,f,4772,4165,4776,4165,4806,4167,4835,4171,4854,4174,4872,4178,j,4872,3931,4908,3931,4908,2602,4916,1690,4870,1690,f,4849,1690,4828,1690,c]],label:"Navajo",shortLabel:"NA",labelPosition:[446.5,211.4],labelAlignment:[t,v]},"005":{outlines:[[i,2258,53,f,2262,71,2269,88,2270,90,2271,91,2281,100,2272,104,2270,106,2268,106,2265,107,2262,108,2260,109,2260,111,2259,114,2257,115,2254,119,2256,129,2257,137,2256,144,2253,161,2246,176,2245,181,2240,186,2235,192,2231,201,2227,211,2226,223,2226,234,2223,245,2223,247,2222,249,2221,252,2220,254,2214,261,2209,265,2207,267,2206,270,2199,285,2194,296,2193,299,2193,302,2193,316,2196,329,2205,372,2189,411,2188,413,2184,415,2185,421,2182,427,2176,440,2173,453,2166,485,2168,518,2168,521,2169,524,2172,531,2175,543,2176,546,2178,549,2180,553,2179,558,2179,560,2178,562,2177,565,2176,568,2173,576,2168,584,2155,604,2142,624,2135,633,2146,644,2148,645,2149,647,2151,652,2158,657,2168,664,2177,672,2179,673,2179,675,2182,686,2177,690,2169,698,2171,716,2171,719,2170,721,2167,726,2168,735,2168,739,2169,743,2171,752,2173,757,2176,763,2178,769,2179,771,2179,772,2178,777,2174,782,2171,786,2167,791,2163,794,2161,800,2158,805,2158,813,2157,827,2151,839,2144,852,2132,855,2121,857,2108,853,2099,851,2092,855,2082,862,2073,873,2072,874,2071,876,2068,881,2064,881,2046,882,2035,894,2024,907,2009,912,1989,918,1967,924,1953,928,1941,935,1931,942,1921,946,1908,951,1894,960,1889,964,1882,966,1857,976,1831,982,1818,984,1805,987,1791,991,1780,1000,1772,1007,1767,1012,1765,1014,1762,1016,1755,1020,1747,1024,1730,1031,1713,1039,1696,1046,1689,1058,1683,1068,1669,1066,1660,1065,1650,1064,1649,1064,1647,1065,1625,1082,1613,1099,1611,1102,1608,1104,1598,1111,1598,1127,1598,1135,1595,1142,1593,1147,1594,1155,1596,1170,1581,1170,1566,1169,1553,1152,1548,1144,1542,1138,1540,1136,1538,1135,1536,1135,1534,1135,1525,1135,1518,1139,1515,1141,1513,1144,1496,1160,1482,1178,1476,1187,1470,1194,1457,1210,1459,1230,1459,1239,1465,1246,1467,1249,1468,1252,1470,1259,1470,1265,1471,1276,1474,1286,1474,1288,1477,1291,1489,1299,1495,1319,1496,1322,1495,1324,1493,1330,1492,1337,1492,1340,1491,1343,1489,1350,1487,1356,1483,1369,1485,1381,1485,1383,1485,1384,1485,1386,1485,1387,1485,1389,1486,1391,1487,1394,1487,1397,1488,1400,1489,1403,1492,1413,1499,1422,1501,1425,1504,1427,1514,1433,1505,1447,1504,1449,1503,1450,1491,1461,1487,1475,j,1486,1834,f,1500,1836,1515,1835,1518,1835,1521,1835,1533,1832,1541,1838,1543,1840,1546,1841,1548,1841,1550,1843,1557,1849,1569,1855,1572,1856,1574,1857,1576,1857,1578,1859,1589,1870,1607,1863,1614,1860,1619,1863,1622,1865,1624,1866,1634,1870,1640,1877,1647,1886,1658,1895,1672,1906,1685,1918,1713,1944,1756,1954,1775,1958,1779,1968,1780,1970,1782,1971,1799,1983,1814,1995,1816,1997,1819,1997,1831,1996,1836,2003,1837,2005,1837,2007,1839,2016,1843,2020,1845,2022,1846,2025,1855,2050,1880,2061,1884,2063,1888,2063,1899,2065,1901,2065,1920,2064,1939,2068,1945,2069,1949,2071,1960,2078,1973,2078,1997,2079,2010,2088,2019,2094,2030,2099,2033,2100,2036,2100,2049,2100,2061,2100,2061,2101,2062,2101,2063,2105,2071,2105,2074,2105,2077,2106,2083,2107,2090,2108,2093,2108,2096,2109,2103,2110,2109,2108,2115,2107,2121,2105,2123,2105,2125,2105,2140,2101,2144,2109,2150,2119,2157,2127,2159,2128,2162,2128,2167,2127,2171,2126,2182,2124,2182,2125,2182,2127,2184,2128,2192,2136,2196,2147,2199,2155,2205,2161,2207,2163,2209,2166,2215,2180,2225,2188,2233,2194,2236,2188,j,2364,2188,2367,2301,2464,2301,2464,2508,3017,2508,3017,2697,3239,2697,3239,3145,f,3245,3146,3251,3148,3254,3149,3256,3150,3275,3158,3292,3159,3307,3160,3324,3156,3339,3153,3352,3159,3361,3163,3362,3171,3364,3189,3364,3208,3364,3210,3367,3212,3369,3213,3370,3214,3379,3219,3386,3215,3389,3214,3391,3213,3394,3211,3395,3208,3396,3205,3396,3202,3397,3180,3405,3162,3408,3155,3420,3154,3424,3153,3427,3154,3439,3158,3451,3165,3453,3166,3455,3166,3463,3168,3468,3165,3472,3163,3477,3160,3488,3155,3497,3146,3499,3144,3502,3142,3511,3137,3524,3140,3538,3142,3550,3149,3565,3159,3580,3169,3593,3178,3608,3183,3629,3191,3648,3202,3651,3204,3654,3208,3658,3215,3671,3214,3685,3213,3700,3213,3701,3213,3703,3213,3706,3214,3709,3215,3718,3215,3720,3223,3720,3225,3722,3227,3730,3237,3739,3244,3741,3246,3744,3245,3758,3244,3769,3251,3789,3263,3812,3272,3821,3276,3828,3280,3838,3287,3847,3293,3866,3307,3886,3319,3894,3324,3903,3328,3905,3329,3906,3331,3915,3347,3932,3351,3940,3353,3945,3350,3952,3344,3952,3334,3952,3316,3966,3315,3970,3315,3972,3316,3981,3321,3989,3326,3997,3332,4007,3330,4010,3329,4015,3327,j,4015,50,2258,50,c]],label:"Coconino",shortLabel:"CC",labelPosition:[289.7,131.1],labelAlignment:[t,v]},"015":{outlines:[[i,2258,53,f,2257,52,2257,50,j,765,50,765,1024,f,766,1027,766,1030,767,1038,769,1043,769,1044,769,1046,767,1053,763,1057,758,1061,756,1066,750,1077,746,1088,743,1100,736,1111,732,1119,725,1125,717,1132,708,1138,703,1141,698,1146,709,1153,709,1165,710,1174,704,1183,700,1189,695,1193,688,1199,687,1208,686,1215,683,1221,680,1228,674,1231,659,1240,642,1247,621,1255,598,1252,597,1251,595,1249,587,1234,569,1228,550,1221,534,1207,526,1199,522,1189,518,1177,511,1169,501,1155,485,1147,482,1146,479,1145,477,1144,476,1143,466,1137,458,1126,457,1124,457,1121,456,1106,438,1104,415,1103,407,1116,407,1118,403,1118,391,1119,384,1116,382,1115,378,1114,375,1113,372,1113,357,1111,344,1111,338,1112,333,1110,320,1107,309,1100,302,1096,293,1094,292,1094,290,1094,280,1095,273,1101,272,1102,269,1103,267,1104,265,1105,245,1115,221,1116,210,1116,199,1120,169,1129,141,1141,129,1146,115,1147,104,1148,95,1153,90,1156,90,1161,91,1174,96,1187,102,1199,106,1207,110,1215,109,1224,107,1234,103,1244,91,1278,103,1309,108,1322,112,1331,115,1337,121,1344,137,1363,138,1388,138,1389,139,1391,140,1401,149,1404,152,1405,155,1407,158,1410,157,1415,151,1433,144,1451,140,1460,138,1470,137,1475,139,1479,140,1482,140,1485,140,1533,140,1582,140,1586,141,1588,141,1590,141,1592,143,1604,143,1617,143,1625,145,1632,148,1640,150,1649,152,1661,151,1673,149,1701,165,1717,174,1727,176,1742,177,1750,179,1758,179,1760,179,1762,186,1792,184,1824,184,1828,182,1833,179,1847,169,1859,167,1862,165,1865,162,1870,162,1877,162,1896,169,1914,175,1929,181,1940,183,1946,185,1948,187,1950,188,1952,189,1954,189,1956,191,1965,195,1969,206,1986,215,2003,226,2022,232,2032,234,2034,235,2037,242,2055,246,2078,255,2135,257,2191,258,2195,257,2198,257,2199,257,2201,256,2212,258,2222,261,2240,262,2258,264,2275,262,2292,261,2303,257,2311,256,2314,255,2316,254,2318,252,2319,247,2321,246,2326,245,2329,243,2332,237,2341,230,2337,228,2336,224,2336,218,2336,214,2339,199,2351,190,2369,187,2375,188,2383,188,2384,190,2385,194,2386,199,2387,201,2387,203,2388,210,2392,215,2398,221,2406,219,2416,215,2430,205,2442,199,2449,197,2458,196,2461,196,2464,198,2490,201,2515,204,2541,203,2568,202,2588,201,2609,201,2612,201,2615,200,2623,198,2628,196,2631,195,2633,195,2635,193,2637,201,2644,211,2650,235,2663,246,2675,250,2678,254,2683,258,2688,257,2700,257,2701,258,2703,259,2707,259,2712,260,2736,280,2748,303,2761,316,2781,317,2783,318,2785,325,2794,333,2802,345,2814,359,2826,366,2832,373,2844,374,2846,375,2848,380,2854,382,2866,388,2899,397,2932,402,2946,409,2958,414,2966,417,2973,419,2976,419,2979,418,2988,423,2991,428,2995,435,2998,442,3002,443,3014,444,3033,447,3051,448,3057,449,3063,449,3064,448,3065,443,3074,440,3082,440,3084,439,3086,436,3092,436,3098,437,3100,437,3102,438,3106,439,3110,440,3112,441,3114,447,3124,455,3132,462,3140,479,3139,483,3139,488,3138,490,3137,491,3137,501,3137,505,3141,509,3145,510,3151,512,3158,514,3164,518,3177,530,3182,542,3187,557,3187,561,3188,563,3190,570,3197,576,3205,583,3216,598,3219,600,3219,602,3220,611,3225,623,3225,625,3225,626,3226,646,3241,655,3261,663,3280,678,3289,680,3290,681,3292,681,3294,682,3296,688,3307,700,3310,709,3312,721,3311,729,3310,736,3310,738,3310,740,3310,744,3312,749,3312,755,3313,759,3320,773,3345,797,3362,812,3373,833,3369,860,3363,888,3361,909,3359,931,3364,951,3370,972,3370,973,3370,975,3370,982,3372,983,3381,983,3382,983,3384,984,3390,987,3393,992,3398,998,3395,1000,3393,1003,3393,1016,3392,1028,3389,1031,3389,1034,3388,1041,3387,1044,3385,1047,3384,1050,3383,1052,3382,1053,3382,1068,3381,1081,3383,1085,3384,1088,3386,1099,3393,1108,3401,1110,3403,1112,3404,1115,3404,1116,3406,1120,3411,1132,3410,1140,3410,1145,3407,1148,3406,1150,3405,1152,3404,1154,3404,1163,3404,1167,3401,1170,3399,1173,3399,1179,3399,1182,3397,1185,3396,1188,3396,1197,3397,1201,3395,1204,3393,1207,3392,1209,3392,1210,3390,1221,3381,1234,3364,1245,3351,1267,3331,1287,3313,1312,3302,1317,3301,1323,3303,1325,3304,1327,3305,1336,3309,1345,3315,1348,3318,1352,3316,1355,3315,1358,3315,1386,3314,1415,3319,1432,3323,1448,3321,1458,3320,1467,3314,1473,3310,1485,3317,j,1486,1475,f,1490,1461,1502,1450,1504,1449,1505,1447,1513,1433,1503,1427,1501,1425,1498,1422,1491,1413,1489,1403,1488,1400,1487,1397,1486,1394,1485,1391,1485,1389,1485,1387,1485,1386,1485,1384,1485,1383,1484,1381,1483,1369,1486,1356,1488,1350,1490,1343,1491,1340,1492,1337,1493,1330,1495,1324,1496,1322,1495,1319,1489,1299,1477,1291,1474,1288,1473,1286,1471,1276,1470,1265,1469,1259,1467,1252,1466,1249,1464,1246,1459,1239,1458,1230,1456,1210,1469,1194,1476,1187,1482,1178,1496,1160,1512,1144,1515,1141,1518,1139,1524,1135,1533,1135,1535,1135,1537,1135,1540,1136,1541,1138,1548,1144,1553,1152,1566,1169,1581,1170,1595,1170,1593,1155,1592,1147,1595,1142,1598,1135,1598,1127,1598,1111,1608,1104,1610,1102,1612,1099,1625,1082,1647,1065,1648,1064,1650,1064,1659,1065,1668,1066,1683,1068,1688,1058,1695,1046,1712,1039,1730,1031,1747,1024,1755,1020,1762,1016,1764,1014,1767,1012,1772,1007,1780,1000,1791,991,1804,987,1818,984,1831,982,1857,976,1882,966,1888,964,1894,960,1907,951,1921,946,1931,942,1940,935,1953,928,1967,924,1988,918,2008,912,2023,907,2035,894,2045,882,2063,881,2067,881,2070,876,2072,874,2073,873,2081,862,2091,855,2098,851,2107,853,2120,857,2131,855,2144,852,2150,839,2157,827,2157,813,2158,805,2160,800,2163,794,2166,791,2170,786,2174,782,2177,777,2178,772,2179,771,2178,769,2175,763,2173,757,2171,752,2168,743,2167,739,2167,735,2166,726,2169,721,2171,719,2170,716,2168,698,2176,690,2181,686,2179,675,2179,673,2177,672,2167,664,2158,657,2151,652,2148,647,2147,645,2145,644,2135,633,2141,624,2155,604,2167,584,2172,576,2176,568,2177,565,2178,562,2179,560,2179,558,2180,553,2177,549,2175,546,2174,543,2171,531,2168,524,2167,521,2167,518,2165,485,2173,453,2176,440,2181,427,2184,421,2184,415,j,2184,414,f,2184,413,2183,411,j,2188,411,f,2204,372,2195,329,2192,316,2192,302,2192,299,2194,296,2199,285,2205,270,2206,267,2209,265,2213,261,2219,254,2221,252,2222,249,2222,247,2223,245,2225,234,2226,223,2227,211,2231,201,2235,192,2240,186,2244,181,2246,176,2252,161,2255,144,2257,137,2255,129,2253,119,2257,115,2258,114,2259,111,2260,109,2262,108,2265,107,2267,106,2269,106,2271,104,2280,100,2271,91,2269,90,2269,88,f,2262,71,2258,53,c]],label:"Mohave",shortLabel:"MO",labelPosition:[75.3,159.1],labelAlignment:[t,v]}}}];
g=d.length;if(r){while(g--){e=d[g];n(e.name.toLowerCase(),e,n.geo);}}else{while(g--){e=d[g];u=e.name.toLowerCase();a(s,u,1);h[s].unshift({cmd:"_call",obj:window,args:[function(w,x){if(!n.geo){p.raiseError(p.core,"12052314141","run","JavaScriptRenderer~Maps._call()",new Error("FusionCharts.HC.Maps.js is required in order to define vizualization"));
return;}n(w,x,n.geo);},[u,e],window]});}}}]);