<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="/">

<html>
<head>
  <title>Brand-X | Available Brands</title>
  <link rel="stylesheet" type="text/css" href="../css/table.css" />
</head>
<body>
    <center><h2> Available Brands </h2></center>
      <table>
        <thead>
          <tr>
            <th>Car ID</th>
            <th>Brand Name</th>
            <th>Model Name</th>
            <th>Year</th>
            <th>Country</th>
            <th>Fuel Transmission</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>
          <xsl:for-each select="vehicle/car[brand_name='Toyota']">
            <tr>
              <td><strong><xsl:value-of select="car_id"/></strong></td>
              <td><strong><xsl:value-of select="brand_name"/></strong></td>
              <td><strong><xsl:value-of select="model_name"/></strong></td>
              <td><strong><xsl:value-of select="year"/></strong></td>
              <td><strong><xsl:value-of select="country"/></strong></td>
              <td><strong><xsl:value-of select="fuel_transmission"/></strong></td>
              <td><strong><xsl:value-of select="price"/></strong></td>
            </tr>
          </xsl:for-each>
        </tbody>
      </table>
</body>
</html>

  </xsl:template>
</xsl:stylesheet>