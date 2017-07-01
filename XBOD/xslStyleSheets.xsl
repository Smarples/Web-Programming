<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
	<html>
	<head>
		<title>Stuarts Style</title>
	</head>
	<body>
	<h2>List of all Managers</h2>
	<table border="1">
		<tr bgcolor="#9acd32">
			<th>Date of birth</th>
			<th>First Name</th>
			<th>Hourly Wage</th>
			<th>LastName</th>
			<th>Position</th>
		</tr>
		<xsl:for-each select="/staff/person[position='Manager']">
		<tr>
			<td><xsl:value-of select="dateOfBirth"/></td>
			<td><xsl:value-of select="firstName"/></td>
			<td><xsl:value-of select="hourlyWage"/></td>
			<td><xsl:value-of select="lastName"/></td>
			<td><xsl:value-of select="position"/></td>
		</tr>
		</xsl:for-each>
	</table>
	</body>
	</html>
</xsl:template>

</xsl:stylesheet>
