<!DOCTYPE html>
<html>

  <head>
    <script data-require="jquery@3.0.0" data-semver="3.0.0" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.js"></script>
    <link rel="stylesheet" href="style.css" />
    <!--script src="jquery.js"></script-->
    <script src="konva.js"></script>
    <script src="script.js"></script>
    <script src="graphicLine.js"></script>
    <script src="addAnchor.js"></script>
  </head>

  <body>
    <h1>Graph Contsruction</h1>
    <div class="tools">
      SELECTION TOOLs
		        <span class="selectTool">
        <button id="id-draw-tool">DRAW</button>
      </span>
      <span class="selectTool">
        <button id="id-select-tool">SELECT</button>
      </span>
      <span class="eraseTool">
        <button id="id-erase-tool">DESELECT</button>
      </span>
    </div>
    <div class="c-canvas-editor">
      <div id="id-canvasID">
        <canvas id="id-cnv-canvas"></canvas>
      </div>
    </div>
  </body>

</html>
