<html>

	<head>
		<title>Meu primeiro site em PHP! Woohoo!</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>jQuery UI Accordion - Default functionality</title>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
		<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
		<script>
		$( function() {
			$( "#accordion" ).accordion();
		} );
		</script>
		
		<style type="text/css">
			.linha {
				font-weight: bold;
				color: black;
				padding-left: 10px;
				line-height: 50px;
			}
		</style>
	<head>
	
	<body>
	
		<?php
			for( $i = 0 ; $i < 1 ; $i++ ) {
				print( "<span class=\"linha\">FERNANDA SANCHEZ ABAD - 
						E-mail: fe_sanchez@icloud.com
						San Diego - CA                                                                          " . $i . "</span><br />");
			}
		?>
	<div id="accordion">
		<h3>ABOUT ME</h3>
		<div>
			<p>
			Bilingual (Portuguese and English) professional with 15+ years of Accounting, Tax, and Project Management experience 
			implementing effective tax management processes and monitoring KPIs to ensure financial compliance and reduce operating 
			costs. Possess great experience in the planning and implementation of ERP systems in corporate environments. Strong 
			leadership, analytical, problem-solving, relationship building, communication, and negotiation skills. Proficient in Microsoft 
			Office (Word, Excel, PowerPoint, Access), ERP Systems, and Accounting Systems.
			</p>
		</div>
		<h3>EDUCATION & CERTIFICATIONS</h3>
		<div>
			<ul>
			  <li>Information Technology Certificate Program – SDUIS – San Diego, CA Expected 12/2022</li>
			  <p>Relevant Coursework: Introduction to Information Systems, Operating Systems, Web Development & Management, Data Communication & Computer Networking, Database Management Systems, Information Systems Security, among others.</p>
			  <li>Bachelor of Accounting Sciences – Universidade Paulista (UNIP) – Brazil 08/2014</li>
			</ul>				
		</div>
		<h3>LAST PROFESSIONAL EXPERIENCE</h3>
		<div>
			<p>
			Apsen Farmacêutica S.A. – Brazil – Project Analyst 01/2015 – 05/2018
			</p>
			<ul>
			  <li>Coordinated the implementation of projects focused on new systems deployment and processes optimization</li>
			  <li>Conducted internal studies to understand current inefficiencies and procedural errors.</li>
			  <li>Controlled budgeting procedures to ensure proper resource allocation based on project complexity and deadlines.</li>
			  <li>Designed training programs and developed Standardized Operating Procedures (SOPs) to support new systems implementation.</li>
			  <li>Led the innovative implementation of SAP system for several business units including IT, accounting, finance, and sales.</li>
			  <li>Successfully upgraded the company’s internal systems to comply with Brazil’s SPED fiscal monitoring system in 10 months, mapping all the company’s transactions, documenting scenarios, and making the resources schedule for the testing phase.</li>
			</ul>
		  </div>
		  <h3>LANGUAGES</h3>
		  <div>
			<ul>
			  <li>English: Fluent</li>
			  <li>Portuguese: Native</li>
			  <li>Spanish: Intermediary</li>
			</ul>
		  </div>
		</div>
	</body>
	
	
</html>