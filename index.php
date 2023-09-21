<!DOCTYPE html>
<html>
  <head>
    <title>Toll and Distance calculator</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    <link
      rel="stylesheet"
      type="text/css"
      href="/style.css"
    />
  </head>
  <body>
    <div class="App">
      <div class="auth-form-container">
        <h1>Toll and Distance calculator</h1>
        <form id="intent-form" class="login-form" o>
          <label for="source">Source</label>
          <input name="source" id="source" placeholder="Dallas, TX" />
          <label for="destination">Destination</label>
          <input name="destination" id="destination" placeholder="Houston, TX" />
          <button type="button" id="submit-btn">Get Information</button>
          <div id="result-container" class="result">
            <h2>Result:</h2>
            <h3>Diatance: <span id="mileage">0 mil</span></h3>
            <h3>Toll: <span id="toll">0 $</span></h3>
            <p><br /></p>
          </div>
        </form>
      </div>
    </div>
    <script>
 
    </script>
  </body>
</html>


