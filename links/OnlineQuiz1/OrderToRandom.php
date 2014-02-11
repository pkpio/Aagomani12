<?php
require_once '../../include/database.php';
//Defining Queastions...............

//Set A....

//This is Queastion 1..... Queastion text comes between <p>...</p>
$OrderQstnSetA[0] = "<li><p>The tolerance band: gold , silver and brown represent ?</p>
						 <p>
						 <input type='radio' name='answer' value='1' /> 10 % , 5% , 1%
						 <input type='radio' name='answer' value='2' /> 5 %  , 10%, 2%
						 <input type='radio' name='answer' value='3' /> 5 % , 10% , 1%
						 <input type='radio' name='answer' value='4' /> 10 % , 5%, 2%</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetA[0] = "3";

//This is Queastion 2..... Queastion text comes between <p>...</p>
$OrderQstnSetA[1] = "<li><p>223 on a capacitor represents ?</p>
						 <p>
						 <input type='radio' name='answer' value='1' /> 0.022 uF 
						 <input type='radio' name='answer' value='2' /> 22 nF
						 <input type='radio' name='answer' value='3' /> 22000 pF
						 <input type='radio' name='answer' value='4' /> All of the above</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetA[1] = "4";

//This is Queastion 3..... Queastion text comes between <p>...</p>
$OrderQstnSetA[2] = "<li><p>The current requirement of a typical LED is ?</p>
						 <p>
						 <input type='radio' name='answer' value='1' /> 1-5 mA
						 <input type='radio' name='answer' value='2' /> 20-25mA
						 <input type='radio' name='answer' value='3' /> 30-35mA
						 <input type='radio' name='answer' value='4' /> 50-65 mA</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetA[2] = "1";


//This is Queastion 4..... Queastion text comes between <p>...</p>
$OrderQstnSetA[3] = "<li><p> Which motor is not suitable for use as DC machine ?</p>
						 <p>
						 <input type='radio' name='answer' value='1' /> Permanent magnet motor
						 <input type='radio' name='answer' value='2' /> Series Motor
						 <input type='radio' name='answer' value='3' /> Squirrel Cage Motor
						 <input type='radio' name='answer' value='4' /> Synchronous motor</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetA[3] = "4";


//This is Queastion 5..... Queastion text comes between <p>...</p>
$OrderQstnSetA[4] = "<li><p>Select the odd man out of the following:</p>
						 <p>
						 <input type='radio' name='answer' value='1' /> J.Bardeen
						 <input type='radio' name='answer' value='2' /> W.Brattain
						 <input type='radio' name='answer' value='3' /> William Schockly
						 <input type='radio' name='answer' value='4' /> Jack Kilby</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetA[4] = "4";

//This is Queastion 6..... Queastion text comes between <p>...</p>
$OrderQstnSetA[5] = "<li><p>These Jargon terms mean  'mickey' , 'electro' , 'cap' , 'puff'…  ?</p>
						 <p>
						 <input type='radio' name='answer' value='1' /> mighty, electronic ,capper ,picofarad
						 <input type='radio' name='answer' value='2' /> microfarad, electronic , capacitor, picofarad
						 <input type='radio' name='answer' value='3' /> microfarad , electrolytic,capacitor,picofarad
						 <input type='radio' name='answer' value='4' /> microfarad , electrolytic , capping , blow</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetA[5] = "2";	


//This is Queastion 7..... Queastion text comes between <p>...</p>
$OrderQstnSetA[6] = "<li><p>This characteristic's modern unit of measurement is named after a german physicist ?</p>
						 <p>
						 <input type='radio' name='answer' value='1' /> Force
						 <input type='radio' name='answer' value='2' /> Frequency
						 <input type='radio' name='answer' value='3' /> Flux
						 <input type='radio' name='answer' value='4' /> Pressure</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetA[6] = "2";

//This is Queastion 8..... Queastion text comes between <p>...</p>
$OrderQstnSetA[7] = "<li><p>Select the odd man out of the following:</p>
						 <p>
						 <input type='radio' name='answer' value='1' /> Gordon Moore 
						 <input type='radio' name='answer' value='2' /> Robert Noyce
						 <input type='radio' name='answer' value='3' /> Andrew Grove
						 <input type='radio' name='answer' value='4' /> Ed Turney</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetA[7] = "4";

//This is Queastion 9..... Queastion text comes between <p>...</p>
$OrderQstnSetA[8] = "<li><p>The FFT , mathematical process extensively used in DSP .what word does the first 'F' in FFT stand for ?</p>
						 <p>
						 <input type='radio' name='answer' value='1' /> Fourier
						 <input type='radio' name='answer' value='2' /> Footed
						 <input type='radio' name='answer' value='3' /> Fast
						 <input type='radio' name='answer' value='4' /> Ford</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetA[8] = "3";


//This is Queastion 10..... Queastion text comes between <p>...</p>
$OrderQstnSetA[9] = "<li><p> Which of the following is not an effect of CMOS Scaling?</p>
						 <p>
						 <input type='radio' name='answer' value='1' /> Integration density increases
						 <input type='radio' name='answer' value='2' /> Switching speed decreases
						 <input type='radio' name='answer' value='3' /> Switching speed increases
						 <input type='radio' name='answer' value='4' /> Power consumption decreases</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetA[9] = "3";


//This is Queastion 11..... Queastion text comes between <p>...</p>
$OrderQstnSetA[10] = "<li><p>What is the reason that Gate length in CMOS cannot be decreased beyond a limit?</p>
						 <p>
						 <input type='radio' name='answer' value='1' /> No increase of On-current (Drain Current)
						 <input type='radio' name='answer' value='2' /> Increase of Off-current (Subthreshold current)
						 <input type='radio' name='answer' value='3' /> No decrease of Gate Capacitance by Parasitic Components
						 <input type='radio' name='answer' value='4' /> Decrease of Off-current</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetA[10] = "4";

//This is Queastion 12..... Queastion text comes between <p>...</p>
$OrderQstnSetA[11] = "<li><p>Which is the first Indian company to start mobile telecommunication services for consumers in india ?</p>
						 <p>
						 <input type='radio' name='answer' value='1' /> BSNL
						 <input type='radio' name='answer' value='2' /> Bharti
						 <input type='radio' name='answer' value='3' /> Reliance
						 <input type='radio' name='answer' value='4' /> Cellone</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetA[11] = "2";		


//This is Queastion 13..... Queastion text comes between <p>...</p>
$OrderQstnSetA[12] = "<li><p>GPS constellation has how many satellites</p>
						 <p>
						 <input type='radio' name='answer' value='1' /> 7
						 <input type='radio' name='answer' value='2' /> 21
						 <input type='radio' name='answer' value='3' /> 31
						 <input type='radio' name='answer' value='4' /> 45</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetA[12] = "3";

//This is Queastion 14..... Queastion text comes between <p>...</p>
$OrderQstnSetA[13] = "<li><p>You have been given thick & thin wires for connections. Which one you will use for connecting an ammeter & a voltmeter?</p>
						 <p>
						 <input type='radio' name='answer' value='1' /> Thick-Ammeter , Thin-Voltmeter 
						 <input type='radio' name='answer' value='2' /> Thin-Voltmeter, Thick-Voltmeter
						 <input type='radio' name='answer' value='3' /> Both thin
						 <input type='radio' name='answer' value='4' /> Both thick</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetA[13] = "1";

//This is Queastion 15..... Queastion text comes between <p>...</p>
$OrderQstnSetA[14] = "<li><p>The most common format for a video home recorder is VHS. VHS stands for ?</p>
						 <p>
						 <input type='radio' name='answer' value='1' /> Video horizontal standard
						 <input type='radio' name='answer' value='2' /> Voltage house standard
						 <input type='radio' name='answer' value='3' /> Very high speed
						 <input type='radio' name='answer' value='4' /> Video home system</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetA[14] = "4";


//This is Queastion 16..... Queastion text comes between <p>...</p>
$OrderQstnSetA[15] = "<li><p> A motor suitable for signalling device is</p>
						 <p>
						 <input type='radio' name='answer' value='1' /> Induction motor
						 <input type='radio' name='answer' value='2' /> DC Shunt motor
						 <input type='radio' name='answer' value='3' /> DC Series motor
						 <input type='radio' name='answer' value='4' /> Reluctance motor</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetA[15] = "4";


//This is Queastion 17..... Queastion text comes between <p>...</p>
$OrderQstnSetA[16] = "<li><p>Typical number of erasable cycles in a flash device is</p>
						 <p>
						 <input type='radio' name='answer' value='1' /> 10
						 <input type='radio' name='answer' value='2' /> 10^10
						 <input type='radio' name='answer' value='3' /> 10^3 
						 <input type='radio' name='answer' value='4' /> 10^5</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetA[16] = "4";

//This is Queastion 18..... Queastion text comes between <p>...</p>
$OrderQstnSetA[17] = "<li><p>A memory rated with 1kB contains how many bits?</p>
						 <p>
						 <input type='radio' name='answer' value='1' /> 1000
						 <input type='radio' name='answer' value='2' /> 8000
						 <input type='radio' name='answer' value='3' /> 1024
						 <input type='radio' name='answer' value='4' /> 8192</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetA[17] = "4";	


//This is Queastion 19..... Queastion text comes between <p>...</p>
$OrderQstnSetA[18] = "<li><p>Which of these is a Server grade processor?</p>
						 <p>
						 <input type='radio' name='answer' value='1' /> Intel i-7 
						 <input type='radio' name='answer' value='2' /> Intel  Xeon
						 <input type='radio' name='answer' value='3' /> AMD Athalon
						 <input type='radio' name='answer' value='4' /> Core 2 Duo</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetA[18] = "2";

//This is Queastion 20..... Queastion text comes between <p>...</p>
$OrderQstnSetA[19] = "<li><p>A  typical CD  (700 Mb) can accommodate how many floppy disk types</p>
						 <p>
						 <input type='radio' name='answer' value='1' /> 50 
						 <input type='radio' name='answer' value='2' /> 100
						 <input type='radio' name='answer' value='3' /> 500
						 <input type='radio' name='answer' value='4' /> 1000</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetA[19] = "3";

//This is Queastion 21..... Queastion text comes between <p>...</p>
$OrderQstnSetA[20] = "<li><p>Which semi conductor material was used in making the first transistor ?</p>
						 <p>
						 <input type='radio' name='answer' value='1' /> Germanium
						 <input type='radio' name='answer' value='2' /> Silicon
						 <input type='radio' name='answer' value='3' /> Gallium Arsenide
						 <input type='radio' name='answer' value='4' /> Gallium Nitride</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetA[20] = "1";


//This is Queastion 22..... Queastion text comes between <p>...</p>
$OrderQstnSetA[21] = "<li><p> Most widely use micro processor ?</p>
						 <p>
						 <input type='radio' name='answer' value='1' /> Atmega 16
						 <input type='radio' name='answer' value='2' /> 8085
						 <input type='radio' name='answer' value='3' /> PIC
						 <input type='radio' name='answer' value='4' /> 8051</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetA[21] = "2";


//This is Queastion 23..... Queastion text comes between <p>...</p>
$OrderQstnSetA[22] = "<li><p>Generation capacity of india ?</p>
						 <p>
						 <input type='radio' name='answer' value='1' /> 100 GW
						 <input type='radio' name='answer' value='2' /> 170 GW
						 <input type='radio' name='answer' value='3' /> 300 GW
						 <input type='radio' name='answer' value='4' /> 600 GW</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetA[22] = "2";

//This is Queastion 24..... Queastion text comes between <p>...</p>
$OrderQstnSetA[23] = "<li><p>Which company's license was not affected by recent supreme court ruling in 2G scam case ?</p>
						 <p>
						 <input type='radio' name='answer' value='1' /> Tata
						 <input type='radio' name='answer' value='2' /> Airtel
						 <input type='radio' name='answer' value='3' /> Uninor
						 <input type='radio' name='answer' value='4' /> Videocon</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetA[23] = "2";	

//This is Queastion 25..... Queastion text comes between <p>...</p>
$OrderQstnSetA[24] = "<li><p>How much capacitance does a finger typically create when using a capacitive touch sensor?</p>
						 <p>
						 <input type='radio' name='answer' value='1' /> 5-15 nF
						 <input type='radio' name='answer' value='2' /> 5-15 pF
						 <input type='radio' name='answer' value='3' /> 5-15 uF
						 <input type='radio' name='answer' value='4' /> 5-15 mF</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetA[24] = "2";	
	
	
	
	
/*                      So on 30 queastions..Njoy :P Complete the NO image queastions for now. I will do the Image queastions..*/ 	
	
	
	
	

//This is Question 1..... Question text comes between <p>...</p>
$OrderQstnSetB[0] = "<li><p>Bandwidth of INSAT 4E?</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> 30 MHz
                         <input type='radio' name='answer' value='2' /> 5 MHz  
                         <input type='radio' name='answer' value='3' /> 13 MHz
                         <input type='radio' name='answer' value='4' /> 58.5 MHz</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetB[0] = "4";

//This is Question 2..... Question text comes between <p>...</p>
$OrderQstnSetB[1] = "<li><p>Sampling rate of a CD is ?</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> 44.1kHz
                         <input type='radio' name='answer' value='2' /> 48 kHz
                         <input type='radio' name='answer' value='3' /> 22050 Hz
                         <input type='radio' name='answer' value='4' /> 48.4 kHz</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetB[1] = "2";

//This is Question 3..... Question text comes between <p>...</p>
$OrderQstnSetB[2] = "<li><p>Which of the following is an international protocol for lighting control ?</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> Prolicon
                         <input type='radio' name='answer' value='2' /> Lite-con
                         <input type='radio' name='answer' value='3' /> DALI
                         <input type='radio' name='answer' value='4' /> IPLC</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetB[2] = "3";


//This is Question 4..... Question text comes between <p>...</p>
$OrderQstnSetB[3] = "<li><p> Which of the following frequency is used by Television set top box ?</p>
                         <p>
                         <input type='radio' name='answer' value='1' />Channel 13
                         <input type='radio' name='answer' value='2' /> Channel 7
                         <input type='radio' name='answer' value='3' /> VHF
                         <input type='radio' name='answer' value='4' /> UHF</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetB[3] = "3";


//This is Question 5..... Question text comes between <p>...</p>
$OrderQstnSetB[4] = "<li><p>The Transformer that develops a high voltage in a home television set is commonly called as ?</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> Tesla Coil
                         <input type='radio' name='answer' value='2' /> Flyback
                         <input type='radio' name='answer' value='3' /> Yoke
                         <input type='radio' name='answer' value='4' /> Van de graaf</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetB[4] = "2";

//This is Question 6..... Question text comes between <p>...</p>
$OrderQstnSetB[5] = "<li><p>Which of the following statements is true?</p>
                         <p>
                         <input type='radio' name='answer' value='1' />In n-type material, Fermi level is shifted towards Valence Band.                                                 <input type='radio' name='answer' value='2' /> In n-type material, Fermi level is shifted towards Conduction Band.
                         <input type='radio' name='answer' value='3' /> In p-type material, Fermi level is shifted towards Conduction Band.
                         <input type='radio' name='answer' value='4' /> None of these</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetB[5] = "2";   


//This is Question 7..... Question text comes between <p>...</p>
$OrderQstnSetB[6] = "<li><p>Which device can NOT be use to protect a board from ESD (Electro Static Discharge) damage?</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> Hip Strap
                         <input type='radio' name='answer' value='2' /> Boot Strap
                         <input type='radio' name='answer' value='3' /> Wrist Strap
                         <input type='radio' name='answer' value='4' /> ESD bag</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetB[6] = "1";

//This is Question 8..... Question text comes between <p>...</p>
$OrderQstnSetB[7] = "<li><p>Which of the following clip can't be used for measuring some circuit parameter?</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> Alligator Clip
                         <input type='radio' name='answer' value='2' /> Mini test Clip
                         <input type='radio' name='answer' value='3' /> Banana Jack jumper
                         <input type='radio' name='answer' value='4' /> Benson Clip</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetB[7] = "4";

//This is Question 9..... Question text comes between <p>...</p>
$OrderQstnSetB[8] = "<li><p>Which of the following breakdowns occur at the lowest voltage in a p-n junction?</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> Avalanche Breakdown
                         <input type='radio' name='answer' value='2' /> Punch-through Breakdown
                         <input type='radio' name='answer' value='3' /> Zener Breakdown
                         <input type='radio' name='answer' value='4' /> None of these</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetB[8] = "3";


//This is Question 10..... Question text comes between <p>...</p>
$OrderQstnSetB[9] = "<li><p> What frequency band does cyclone radar work in?</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> S-Band
                         <input type='radio' name='answer' value='2' /> X-Band
                         <input type='radio' name='answer' value='3' /> C-Band
                         <input type='radio' name='answer' value='4' /> Ka-Band</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetB[9] = "1";


//This is Queastion 11..... Queastion text comes between <p>...</p>
$OrderQstnSetB[10] = "<li><p>What is flashing ?</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> Removing a cell phone provider's programming from your phone                                     <input type='radio' name='answer' value='2' /> Deleting all address book entries at once                                                                                     <input type='radio' name='answer' value='3' /> Sending rapid-fire text messages
                         <input type='radio' name='answer' value='4' /> Making a cell phone battery inoperable</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetB[10] = "1";

//This is Queastion 12..... Queastion text comes between <p>...</p>
$OrderQstnSetB[11] = "<li><p>A capacitor and a coil in parallel is called ?</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> Tuned Circuit
                         <input type='radio' name='answer' value='2' /> Timing circuit
                         <input type='radio' name='answer' value='3' /> Delay Circuit
                         <input type='radio' name='answer' value='4' /> Schmitt Circuit</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetB[11] = "1";       


//This is Queastion 13..... Queastion text comes between <p>...</p>
$OrderQstnSetB[12] = "<li><p>Which company first invented Mouse, Who first brought it to the market ?</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> Apple , Xerox
                         <input type='radio' name='answer' value='2' /> Xerox , Apple
                         <input type='radio' name='answer' value='3' /> Xerox , Xerox
                         <input type='radio' name='answer' value='4' /> Apple , Apple</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetB[12] = "2";

//This is Queastion 14..... Queastion text comes between <p>...</p>
$OrderQstnSetB[13] = "<li><p>Doppler weather radar can be used to measure ?</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> Lightning
                         <input type='radio' name='answer' value='2' /> Storm
                         <input type='radio' name='answer' value='3' /> Precipitation content
                         <input type='radio' name='answer' value='4' /> Amount of rainfall</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetB[13] = "3";

//This is Queastion 15..... Queastion text comes between <p>...</p>
$OrderQstnSetB[14] = "<li><p>Of this list of controllable switches, which device has the highest switching speed?</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> BJT
                         <input type='radio' name='answer' value='2' /> Thyristor
                         <input type='radio' name='answer' value='3' /> MOSFET
                         <input type='radio' name='answer' value='4' /> HEMT</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetB[14] = "4";


//This is Queastion 16..... Queastion text comes between <p>...</p>
$OrderQstnSetB[15] = "<li><p> Which of the following is the largest under construction nuclear power plant in India?</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> Kudankulam
                         <input type='radio' name='answer' value='2' /> Banswara
                         <input type='radio' name='answer' value='3' /> Kakrapar
                         <input type='radio' name='answer' value='4' /> Jaitapur</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetB[15] = "4";


//This is Queastion 17..... Queastion text comes between <p>...</p>
$OrderQstnSetB[16] = "<li><p>Which of  the following GUI based operating system by Microsoft was launched earliest ?</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> Windows 3.11
                         <input type='radio' name='answer' value='2' /> Windows 95
                         <input type='radio' name='answer' value='3' /> MS-DOS
                         <input type='radio' name='answer' value='4' /> Windows 98</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetB[16] = "1";

//This is Queastion 18..... Queastion text comes between <p>...</p>
$OrderQstnSetB[17] = "<li><p>German physicist Heinrich Hertz discovered and experimented with what form of

 electromagnetic radiation?
</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> IR waves
                         <input type='radio' name='answer' value='2' /> Radio waves
                         <input type='radio' name='answer' value='3' /> UV waves
                         <input type='radio' name='answer' value='4' /> X-Rays</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetB[17] = "2";   


//This is Queastion 19..... Queastion text comes between <p>...</p>
$OrderQstnSetB[18] = "<li><p>After the transistor was invented in 1947, it replaced what device in most electronic

    equipment?
</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> Resistor
                         <input type='radio' name='answer' value='2' /> Diode
                         <input type='radio' name='answer' value='3' /> Vaccum Tubes
                         <input type='radio' name='answer' value='4' /> Point contact transistor</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetB[18] = "3";

//This is Queastion 20..... Queastion text comes between <p>...</p>
$OrderQstnSetB[19] = "<li><p>The binary number 100101101 is equivalent to which of the following number in base 8</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> 454
                         <input type='radio' name='answer' value='2' /> 455
                         <input type='radio' name='answer' value='3' /> 456
                         <input type='radio' name='answer' value='4' /> 457</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetB[19] = "2";

//This is Queastion 21..... Queastion text comes between <p>...</p>
$OrderQstnSetB[20] = "<li><p>What is odd parity for the pair of input sequence 11011, 10011 ?</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> 0 , 0
                         <input type='radio' name='answer' value='2' /> 0 , 1
                         <input type='radio' name='answer' value='3' /> 1 , 0
                         <input type='radio' name='answer' value='4' /> 1 , 1</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetB[20] = "2";


//This is Queastion 22..... Queastion text comes between <p>...</p>
$OrderQstnSetB[21] = "<li><p> Which of the following device has most numbers of cores ? </p>
                         <p>
                         <input type='radio' name='answer' value='1' /> Dual Core Processors
                         <input type='radio' name='answer' value='2' /> Quad Core Processor
                         <input type='radio' name='answer' value='3' /> Intel Xeon   
                         <input type='radio' name='answer' value='4' /> Nvidia GT200</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetB[21] = "4";


//This is Queastion 23..... Queastion text comes between <p>...</p>
$OrderQstnSetB[22] = "<li><p>First electronic computer was named as</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> Colossus
                         <input type='radio' name='answer' value='2' /> Abacus
                         <input type='radio' name='answer' value='3' /> Eniac
                         <input type='radio' name='answer' value='4' /> EDSAC</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetB[22] = "3";

//This is Queastion 24..... Queastion text comes between <p>...</p>

$OrderQstnSetB[23] = "<li><p>The above circuit will work as
</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> Low pass filter
                         <input type='radio' name='answer' value='2' /> High pass filter
                         <input type='radio' name='answer' value='3' />Band pass filter
                         <input type='radio' name='answer' value='4' />Band reject filter</p></li>
						 <br/><img src='SetB24.jpg' />";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetB[23] = "2";   

//This is Queastion 25..... Queastion text comes between <p>...</p>

$OrderQstnSetB[24] = "<li><p>The above circuit will work as
</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> Precision detector
                         <input type='radio' name='answer' value='2' />Trigger Detector
                         <input type='radio' name='answer' value='3' />Envelope detector
                         <input type='radio' name='answer' value='4' />None of these</p></li>
						 <br/><img src='SetB25.jpg' />";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetB[24] = "3";




//Set C....

//This is Question 1..... Question text comes between <p>...</p>
$OrderQstnSetC[0] = "<li><p>What 1970s science fiction film recounts electrical engineer Roy Neary's long, strange trip to Wyoming…and beyond?</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> The island at the top of the world
                         <input type='radio' name='answer' value='2' /> The Omega Man   
                         <input type='radio' name='answer' value='3' /> Close Encounters of the Third Kind
                         <input type='radio' name='answer' value='4' />The strongest man in the world</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetC[0] = "3";

//This is Question 2..... Question text comes between <p>...</p>
$OrderQstnSetC[1] = "<li><p>Communicating over power lines is referred as?</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> Carrier Communication in Powerline (CCPL)
                         <input type='radio' name='answer' value='2' /> Communication over Power (CoP)
                         <input type='radio' name='answer' value='3' /> Poweline Carrier Communication(PLCC)
                         <input type='radio' name='answer' value='4' />Power Communication(PC)</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetC[1] = "3";

//This is Question 3..... Question text comes between <p>...</p>
$OrderQstnSetC[2] = "<li><p>Before inventing the Moog synthesizer, Robert Moog sold kits for building what other

   el           electronic musical instrument?</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> Trauntonmium
                         <input type='radio' name='answer' value='2' />Telharmonium
                         <input type='radio' name='answer' value='3' />Theremin       
                         <input type='radio' name='answer' value='4' />Ondes Martenot</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetC[2] = "3";


//This is Question 4..... Question text comes between <p>...</p>
$OrderQstnSetC[3] = "<li><p> You have been given two transformers of identical VA & Voltage Ratings. But one of them is a 10kHz transformer    

   10k      & another is a 100Hz transformer. Which one of them will be smaller in size?
</p>
                         <p>
                         <input type='radio' name='answer' value='1' />100Hz
                         <input type='radio' name='answer' value='2' /> 10kHz
                         <input type='radio' name='answer' value='3' /> Both of them will be of same size
                         <input type='radio' name='answer' value='4' /> Cant say</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetC[3] = "2";


//This is Question 5..... Question text comes between <p>...</p>
$OrderQstnSetC[4] = "<li><p>What device did Harold P. Brown invent in the late 1880s to help Thomas Edison                  

     pu            publicize the dangers of alternating current?
?</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> Phonograph    
                         <input type='radio' name='answer' value='2' /> Electric chair
                         <input type='radio' name='answer' value='3' /> Telegraph  
                         <input type='radio' name='answer' value='4' />None of thesef</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetC[4] = "2";

//This is Question 6..... Question text comes between <p>...</p>
$OrderQstnSetC[5] = "<li><p>The US Supreme Court upheld the radio-related patents of what inventor in June 1943,

    fi              five months after he died?
</p>
                         <p>
                         <input type='radio' name='answer' value='1' />Joseph Henry   
                         <input type='radio' name='answer' value='2' />Nicola Tesla  
                         <input type='radio' name='answer' value='3' /> Mario Cardullo
                         <input type='radio' name='answer' value='4' /> James Clerk Maxwell</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetC[5] = "2";   


//This is Question 7..... Question text comes between <p>...</p>
$OrderQstnSetC[6] = "<li><p>What Austrian-born electrical engineer, who patented a form of spread-spectrum still

  used        used  in wireless communications, has a star on the Hollywood Walk of Fame?
?</p>
                         <p>
                         <input type='radio' name='answer' value='1' />Burt Lancaster      
                     <input type='radio' name='answer' value='2' />Dorothy Lamour
                         <input type='radio' name='answer' value='3' /> Martin Landau
                         <input type='radio' name='answer' value='4' />Hedy Lamarr</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetC[6] = "4";

//This is Question 8..... Question text comes between <p>...</p>
$OrderQstnSetC[7] = "<li><p>Which of the following scientists who collaborated with NASA astronaut Neil Armstrong  as chief of failure

   analy            analysis on the Apollo 11 project is also widely regarded for his research in microelectronics?
?</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> Charlie Duke
                         <input type='radio' name='answer' value='2' />Owen Garriot   
                         <input type='radio' name='answer' value='3' />Edward Keonjian
                         <input type='radio' name='answer' value='4' /> Bill Pogue</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetC[7] = "3";

//This is Question 9..... Question text comes between <p>...</p>
$OrderQstnSetC[8] = "<li><p>Which of the following does not work in 2.4 GHz ISM band?</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> Bluetooth    
                         <input type='radio' name='answer' value='2' /> WiFi   
                         <input type='radio' name='answer' value='3' />Hiperlan  
                         <input type='radio' name='answer' value='4' />Wireless lan </p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetC[8] = "3";


//This is Question 10..... Question text comes between <p>...</p>
$OrderQstnSetC[9] = "<li><p> Which of the following scientists first coined the term ' Nano-technology '?

      
</p>
                         <p>
                         <input type='radio' name='answer' value='1' />Eric Dexler
                         <input type='radio' name='answer' value='2' />Norio Taniguchi
                         <input type='radio' name='answer' value='3' />Gerd Binning
                         <input type='radio' name='answer' value='4' /> Christoph Gerber</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetC[9] = "2";


//This is Queastion 11..... Queastion text comes between <p>...</p>
$OrderQstnSetC[10] = "<li><p>The most economical manner in which a high- speed decade counter can be realised is by using ? </p>
                         <p>
                         <input type='radio' name='answer' value='1' />Synchronous binary counter
                                                         <input type='radio' name='answer' value='2' />Ripple binary counter
                                                                        <input type='radio' name='answer' value='3' /> Ring Counter
                         <input type='radio' name='answer' value='4' /> Johnson Counter </p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetC[10] = "1";

//This is Queastion 12..... Queastion text comes between <p>...</p>
$OrderQstnSetC[11] = "<li><p>In a Mesh topology of communication network, if there are N stations, the total number of possible full duplex links is</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> N—1
                         <input type='radio' name='answer' value='2' />N (N—1)
                         <input type='radio' name='answer' value='3' /> N (N—1) / 2
                         <input type='radio' name='answer' value='4' /> (N-1) / 2</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetC[11] = "4";       


//This is Queastion 13..... Queastion text comes between <p>...</p>
$OrderQstnSetC[12] = "<li><p>In an 8085 microprocessor, the accumulator contents get altered by the instruction ?</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> ANI 5C
                         <input type='radio' name='answer' value='2' /> CMP C
                         <input type='radio' name='answer' value='3' /> CPI 3A
                         <input type='radio' name='answer' value='4' /> ORA A</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetC[12] = "4";

//This is Queastion 14..... Queastion text comes between <p>...</p>
$OrderQstnSetC[13] = "<li><p>A full adder circuit may be constructed by using</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> two 2-input AND gates and two 3-input. OR gates
                         <input type='radio' name='answer' value='2' /> two half adders and a 2-input AND gate
                         <input type='radio' name='answer' value='3' /> two half adders and a 2-input OR gate
                         <input type='radio' name='answer' value='4' /> two 2-input AND gates and two 3-input XOR gates</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetC[13] = "3";

//This is Queastion 15..... Queastion text comes between <p>...</p>
$OrderQstnSetC[14] = "<li><p>Consider the following processes in the fabrication of ICs:<br/>
    1. Substrate<br/>
    2. Oxide layer<br/>
    3. Photo resist and photolithography<br/>
    4. Etching<br/>
    The correct sequence of these processes is :</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> 1,2,3,4
                         <input type='radio' name='answer' value='2' /> 1,2,4,3
                         <input type='radio' name='answer' value='3' /> 2,1,3,4
                         <input type='radio' name='answer' value='4' /> 2,1,4,3</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetC[14] = "1";


//This is Queastion 16..... Queastion text comes between <p>...</p>
$OrderQstnSetC[15] = "<li><p> Who is considered as ' father of wireless communication '?</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> Al Gross
                         <input type='radio' name='answer' value='2' /> Henrich Hertz
                         <input type='radio' name='answer' value='3' /> Nicola Tesla
                         <input type='radio' name='answer' value='4' /> Guglielmo Marconi</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetC[15] = "4";


//This is Queastion 17..... Queastion text comes between <p>...</p>
$OrderQstnSetC[16] = "<li><p>The radio altimeter on board an aircraft is basically :</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> Doppler radar
                         <input type='radio' name='answer' value='2' /> MTI radar
                         <input type='radio' name='answer' value='3' /> Continuous wave radar
                         <input type='radio' name='answer' value='4' /> Frequency modulated CW radar</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetC[16] = "4";

//This is Queastion 18..... Queastion text comes between <p>...</p>
$OrderQstnSetC[17] = "<li><p>Fermions are the particles, which obey</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> Maxwell-Boltzmann's statistics
                         <input type='radio' name='answer' value='2' /> Bose-Einstein's statistics
                         <input type='radio' name='answer' value='3' /> Heisenberg's uncertainty principle
                         <input type='radio' name='answer' value='4' /> Pauli's exclusion principle</p></li>";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetC[17] = "4";   


//This is Queastion 19..... Queastion text comes between <p>...</p>
$OrderQstnSetC[18] = "<li><p>What is the function of the following circuit?</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> Voltage Clipper
                         <input type='radio' name='answer' value='2' /> Voltage Doubler
                         <input type='radio' name='answer' value='3' /> Rectified Differentiator
                         <input type='radio' name='answer' value='4' /> Precision Rectifier</p></li>
						 <br/><img src='SetC19.jpg' />";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetC[18] = "2";

//This is Queastion 20..... Queastion text comes between <p>...</p>
$OrderQstnSetC[19] = "<li><p>What is the function of the following circuit?</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> Voltage Clipper
                         <input type='radio' name='answer' value='2' /> Voltage Doubler
                         <input type='radio' name='answer' value='3' /> Rectified Differentiator
                         <input type='radio' name='answer' value='4' /> Precision Rectifier</p></li>
						 <br/><img src='SetC20.jpg' />";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetC[19] = "4";

//This is Queastion 21..... Queastion text comes between <p>...</p>
$OrderQstnSetC[20] = "<li><p>What is the function of the following circuit?</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> Schmitt Trigger
                         <input type='radio' name='answer' value='2' /> Astable Multivibrator
                         <input type='radio' name='answer' value='3' /> Monostable Multivibrator
                         <input type='radio' name='answer' value='4' /> Voltage Doubler</p></li>
						 <br/><img src='SetC21.jpg' />";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetC[20] = "2";


//This is Queastion 22..... Queastion text comes between <p>...</p>
$OrderQstnSetC[21] = "<li><p> Rebus - Identify the appropriate word</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> RG Counter
                         <input type='radio' name='answer' value='2' /> Ripple Counter
                         <input type='radio' name='answer' value='3' /> Ring Counter
                         <input type='radio' name='answer' value='4' /> G Counter</p></li>
						 <br/><img src='SetC22.jpg' />";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetC[21] = "3";


//This is Queastion 23..... Queastion text comes between <p>...</p>
$OrderQstnSetC[22] = "<li><p> Rebus - Identify the appropriate word</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> Electronic ICs
                         <input type='radio' name='answer' value='2' /> Electronics for You
                         <input type='radio' name='answer' value='3' /> Electrics
                         <input type='radio' name='answer' value='4' /> Electrics 4 U</p></li>
						 <br/><img src='SetC23.jpg' />";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetC[22] = "2";
//This is Queastion 24..... Queastion text comes between <p>...</p>
$OrderQstnSetC[23] = "<li><p> What is the sequence generated by the above circuit?(MSB is Q2)</p>
                         <p>
                         <input type='radio' name='answer' value='1' /> 000,001,010,011,100,101,110,111,...
                         <input type='radio' name='answer' value='2' />000,010,101,111,...
                         <input type='radio' name='answer' value='3' /> 000,001,010,111,...   
                         <input type='radio' name='answer' value='4' /> 000,010,100,110,...</p></li>
						 <br/><img src='SetC24.jpg' />";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetC[23] = "3";


//This is Queastion 25..... Queastion text comes between <p>...</p>
$OrderQstnSetC[24] = "<li><p>Two Mod-16 Counters are connected as shown in the figure. Output is taken from the pins Q7 (MSB) to Q0 (LSB). Then this circuit will work as a Mod __  Counter. </p>
                         <p>
                         <input type='radio' name='answer' value='1' /> 256
                         <input type='radio' name='answer' value='2' /> 60
                         <input type='radio' name='answer' value='3' /> 64
                         <input type='radio' name='answer' value='4' /> 61</p></li>
						 <br/><img src='SetC25.jpg' />";
//This is the answer..Dont worry it wont be sent to the client anytime :P
$OrderAnsSetC[24] = "4";	
	
	
	
$sequence = $_SESSION['quiz_sequence'];
$array 	  = explode(",", $sequence);

//Changing the order of queastion using generated random sequence,...Same sequence for all sets..
	for($i=0;$i<25;$i++){		
		$RandQstnSetA[$i] = $OrderQstnSetA[$array[$i]-1];
		$RandAnsSetA[$i] = $OrderAnsSetA[$array[$i]-1];
	}
	for($i=0;$i<25;$i++){		
		$RandQstnSetB[$i] = $OrderQstnSetB[$array[$i]-1];
		$RandAnsSetB[$i] = $OrderAnsSetB[$array[$i]-1];
	}
	for($i=0;$i<25;$i++){		
		$RandQstnSetC[$i] = $OrderQstnSetC[$array[$i]-1];
		$RandAnsSetC[$i] = $OrderAnsSetC[$array[$i]-1];
	}
?>
		
		