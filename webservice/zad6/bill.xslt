<?xml version="1.0"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:output doctype-public="-//W3C//DTD XHTML 1.1//EN" doctype-system="http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd" encoding="ISO-8859-2" method="html"/>

  <xsl:template match="/">
    
    <html>
      <head>
		<meta charset="UTF-8"></meta>
		<title>Paweł Tuzinowski zad. 6</title>
		<link rel="stylesheet" href="style.css" type="text/css"></link>
      </head>

      <body>
		<h1><center>Paweł Tuzinowski zad. 6</center></h1>
		<h2 id="register-head">Generacja faktury</h2><br/><br/>
		
		<img src="faktura_wzor.jpg" id="bill"/>
		<div id="nr_fakt">		<xsl:value-of select="Dane/Nr_faktury"/>		</div>
		<div id="sprzedawca1">	<xsl:value-of select="Dane/Sprzedawca/Nazwa"/>	</div>
		<div id="sprzedawca2">	<xsl:value-of select="Dane/Sprzedawca/Adres1"/>	</div>
		<div id="sprzedawca3">	<xsl:value-of select="Dane/Sprzedawca/Adres2"/>	</div>
		<div id="sprzedawca4">	<xsl:value-of select="Dane/Sprzedawca/NIP"/>	</div>
		<div id="nabywca1">		<xsl:value-of select="Dane/Nabywca/Nazwa"/>		</div>
		<div id="nabywca2">		<xsl:value-of select="Dane/Nabywca/Adres1"/>	</div>
		<div id="nabywca3">		<xsl:value-of select="Dane/Nabywca/Adres2"/>	</div>
		<div id="nabywca4">		<xsl:value-of select="Dane/Nabywca/NIP"/>		</div>
		<div id="miejscowosc">	<xsl:value-of select="Dane/Miejscowosc"/>		</div>
		<div id="data">			<xsl:value-of select="Dane/Data"/>				</div>
		<div id="wystawca">		<xsl:value-of select="Dane/Wystawca"/>			</div>
		
	
		<!--
		<xsl:for-each select="Dane/Osoba">
			<h1><xsl:value-of select="Imie"/></h1>
			<h1><xsl:value-of select="Nazwisko"/></h1>
		</xsl:for-each> -->
		
		<br/><br/><br/><p id="return"><a href="../index.php">Powrót do strony głównej.</a></p><br/>
      </body>
 </html>

  </xsl:template>
</xsl:stylesheet>