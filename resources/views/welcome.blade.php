<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
</head>
<body>
    <div id="app">
        <ais-index
            app-id="latency"
            api-key="3d9875e51fbd20c7754e65422f7ce5e1"
            index-name="bestbuy"
            >
            <ais-search-box></ais-search-box>
            <ais-results>
              <template scope="{ result }">
                <h2>
                  <ais-highlight :result="result" attribute-name="name"></ais-highlight>
              </h2>
          </template>
        </ais-results>
</ais-index>
</div>

<script src="/js/app.js"></script>
</body>
</html>
