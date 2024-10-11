<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <style>
    .rumah {
      background-color: red;
      height: 800px;
      width: 800px;
      margin: auto;
      position: absolute;
    }
    .taman {
      background-color: green;
      height: 400px;
      width: 50%;
      position: absolute;
      left: 50%;
    }
    .kamar {
      background-color: yellow;
      height: 400px;
      width: 50%;
      position: absolute;
    }
    .meja {
      background-color: aqua;
      height: 100px;
    }
    .kursi {
      background-color: violet;
      height: 100px;
      position: relative;
    }
  </style>
  <body>
    <div class="rumah">
      <div class="kamar">
        <div class="meja"></div>
        <div class="kursi"></div>
      </div>
      <div class="taman">
        <div class="pohon"></div>
        <div class="rumput"></div>
      </div>
    </div>
  </body>
</html>