var GraphicLine = function(){
	
	this.strtLine = null;
	this.group = null;
	
	this.point1 = 0;
	this.point2 = 0;
	this.point3 = 0;
	this.point4 = 0;
	
	

};

GraphicLine.prototype.startline = function(){
	
	this.strtLine = new Konva.Line({
		points: [10, 210, 10, 410, 150, 50],
		stroke: 'green',
		strokeWidth: 5,
		draggable: false
		
	});
	
	this.group = new Konva.Group({
		draggable: false
	});
	
	this.group.add(this.strtLine);
	MainCanvas.inst.layer.add(this.group);
	MainCanvas.drawCanvas();
	
};
