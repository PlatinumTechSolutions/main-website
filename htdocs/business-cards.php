<html class="no-js" lang="en">
<head>
<title>Business Cards</title>

<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>

<style>

body {
  background: #EEE;
  font-family: 'Ubuntu', sans-serif;
  margin:0;
  padding: 0;
}

.col-container {
  background: #DDD;
  margin: 0px auto;
  width: 510px;
  padding: 20px 0;
}

.col-container .heading {
  background: #DDD;
  padding: 0px;
  font-weight: bold;
  text-align: center;
}

.business-card {
  background: #5a6991;
  margin: 30px;
  width: 450px;
  height: 250px;

  -webkit-box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.75);
  -moz-box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.75);
  box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.75);
}

.business-card .container {
  background: #FFF;
  width: 450px;
  height: 230px;
}

.business-card .tools {
  text-align: center;
  margin: 0;
  padding: 0;
}

.business-card .tools li {
  display: inline-block;
  font-size: 12px;
  font-weight: bold;
  color: #666;
  margin: 0 4px;
}

.details {
  padding: 20px;
  padding-top: 54px;
  color: #555;
}

.details * {
  padding: 0;
  margin: 0;

  font-size: 12px;
}

.details h2 { font-size: 18px; color: #222; margin-bottom: 2px; }
.details h3 { font-size: 16px; color: #222; margin-bottom: 30px; }

.details ul li {
  list-style: none;
  padding: 2px 0;
}

.qr-code { float: right; margin: 16px; }

#business-card-front .logo {
  margin: 0px auto;
  width: 238px;
  padding-top: 40px;
  padding-bottom: 30px;

  text-align: center;
}

#business-card-front .logo * {
  font-weight: normal;
  color: #777;
  margin: 0;
  padding: 0;
}

#business-card-front .logo h1 {
  font-size: 50px;
}

#business-card-front .logo h2 {
  font-size: 30px;
  border-top: 4px solid #777;
}

</style>

</head>
<body>

<div class="col-container">
  <div class="heading">Front</div>

  <div id="business-card-front" class="business-card">
    <div class="container">
      <div class="logo">
        <h1>Platinum</h1>
        <h2>- Tech Solutions -</h2>
      </div>

      <ul class="tools">
        <li>PHP</li>
        <li>MySQL</li>
        <li>PostGreSQL</li>
        <li>Symfony2 &amp; 3</li>
        <li>ElasticSearch</li>
        <li>Jenkins</li>
      </ul>
      <ul class="tools">
        <li>AWS</li>
        <li>RDS</li>
        <li>TDD</li>
        <li>PHPUnit</li>
        <li>BDD</li>
        <li>Behat</li>
        <li>Apache</li>
        <li>Nginx</li>
      </ul>
    </div>
  </div>

  <div class="heading">Back</div>

  <div id="business-card-back" class="business-card">
    <div class="container">
      <div class="qr-code">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADIAQMAAACXljzdAAAABlBMVEX///9aaZEH3gskAAAACXBIWXMAAA7EAAAOxAGVKw4bAAABiElEQVRYw+2XTW6EMAyFjbJgmSPkJtOLIZIqFxtukiNkOQuE+5xQCkylSpVIssBokEbf5sl+/oHojjv+iJ4RgYwPg2ZetPx9tkICkQqzcWSjiqN2RLo0YVaJDtqz05/QV4Mwe55pgK72CHQbydhShUjOOFio419qWpUkX8/J1x7k7PjrSQ4ldYOu8a33ryeiTUEdfAPvdFA3xWZIkDfyhn6TnHHc17QM6QOyZpxh5A6dFbe8NUCgOVUVjsZc7PAUJvwyUjsfbBzgqlEvVJaQkUfmMq2Ve6yVq0/6IKqRsaCi5I3osVWuEEHeoA5dleYOMrevXF1CxNgZZMRZMpN+VBcj5oWez1PxuLMKEiObiVA/d/J1C0T25nfX263rCxISXyts7pksOuuDn62Q7CzRrB1y1p02+vUk3xTyQ9dnVx2+FwqQdFetvc2ibTp8FdQl+SJOXS+V26kuS3CTa5bJp8/aqpPU9Z7Xi6cwyTc5uh4z2WIiTqVJ9jW+WYa0F+zZ8RXJHXf8K74AaqAgBlCOJxIAAAAASUVORK5CYII=" />
      </div>

      <div class="details">
          <h2>Carl Casbolt</h2>
          <h3>Director</h2>

          <ul>
            <li>carl@platinumtechsolutions.co.uk</li>
            <li>www.platinumtechsolutions.co.uk</li>
            <li>07905 323 168</li>
          </ul>
      </div>
    </div>
  </div>

</div>

</body>
</html>
