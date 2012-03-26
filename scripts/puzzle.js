var image,
	imageWidth,
	imageHeight,
	draggedCanvas;
document.ondragover = function(e){e.preventDefault();};
document.ondrop = function(e){e.preventDefault();};
window_onload();
function selectFile()
{
	var td;
    for(var i=0;i<5;i++)
    {
        for(var j=0;j<5;j++)
        {
            td=document.getElementById("dest_table").rows[i].cells[j];
            td.innerHTML="";
         }
    }
    var file = document.getElementById("file").files[0];
    if(!/image\/\w+/.test(file.type))
    {
        alert(file.name+"不是图像文件！");       
        return;            
     }
     else
    {
        canvas=document.createElement("canvas");
        /* canvas.style.display="none";
        document.getElementById("puzzle_source").appendChild(canvas); */
        var ctx=canvas.getContext('2d');
        image=new Image();
		image.src=window.URL.createObjectURL(document.getElementById("file").files[0]);
        image.onload=function()
        {
             ctx.drawImage(image,0,0);  
             imageWidth=image.width;
             imageHeight=image.height;
        } 
        document.getElementById("createPuzzle").disabled=""; 
	    document.getElementById("puzzle_source").innerHTML="";
    }
}
/* draw source canvas */
function drawPuzzle()
{ 
    var canvas,ctx,canvasArray,index,count,source;
    canvasArray=new Array();
    source=document.getElementById("puzzle_source");
    table=document.createElement("table");
    table.setAttribute("border","0");
    table.setAttribute("cellpadding","0");
    table.setAttribute("cellSpacing","1");
    picWidth=400;
    picHeight=400;
    for(var i=0;i<5;i++)
    {
        for(var j=0;j<5;j++)
        {
            canvas=document.createElement("canvas");
            ctx=canvas.getContext('2d');
            canvas.setAttribute("width",picWidth/5+"px");
            canvas.setAttribute("height",picHeight/5+"px");
            canvas.setAttribute("draggable","true");
            canvas.style.display="block";
            canvas.setAttribute("index",i*5+j);
            canvas.addEventListener("dragstart", function(ev){
			
                draggedCanvas=ev.srcElement||ev.target;
                var dt = ev.dataTransfer;
                dt.effectAllowed = 'all';    
                dt.setData("text/plain",draggedCanvas.getAttribute("index"));                
            }, false);
            ctx.fillRect(0,0,canvas.width,canvas.height);
            ctx.drawImage(image,j*imageWidth/5,i*imageHeight/5,imageWidth/5,imageHeight/5,0,0,picWidth/5,picHeight/5);
            canvasArray.push(canvas);
        }
    }
    count=25;
    for(var i=0;i<5;i++)
    {
        tr=document.createElement("tr");
        for(var j=0;j<5;j++)
        {    	    
            td=document.createElement("td");                 
            td.setAttribute("tag","td");
            td.addEventListener("dragend", function(ev) 
            {
                ev.preventDefault();
            }, false);
            td.addEventListener("drop", function(ev) 
            {
                var td=ev.srcElement||ev.target;
				console.log(ev.srcElement,ev.target);
                if(td.getAttribute("tag")!=null)
                {
                    td.appendChild(draggedCanvas);
                }
                ev.preventDefault();
                ev.stopPropagation();
            }, false);
            tr.appendChild(td); 
            index=parseInt(Math.random()*count);
            td.appendChild(canvasArray[index]); 
            canvasArray.splice(index,1);
            count--;             
        }
        table.appendChild(tr);
    }
    source.appendChild(table);  
    document.getElementById("createPuzzle").disabled="disabled";   
}
function window_onload()
{
    var td,tr,dest,table;
	dest=document.getElementById("puzzle_dest");
    table=document.createElement("table");
    table.setAttribute("border","0");
    table.setAttribute("cellpadding","0");
    table.setAttribute("cellSpacing","1");
	table.setAttribute("id","dest_table");
	for(var i=0;i<5;i++)
    {
		tr=document.createElement("tr");
        for(var j=0;j<5;j++)
        {
			td=document.createElement("td");
			td.setAttribute("tag","td");
			tr.appendChild(td);
		}
		table.appendChild(tr);
	}
	dest.appendChild(table);
    for(var i=0;i<5;i++)
    {
        for(var j=0;j<5;j++)
        {
			var dest_rd=document.getElementById("dest_table").rows[i].cells[j];			
            dest_rd.addEventListener("dragend", function(ev){
                ev.preventDefault();
            }, false);
            dest_rd.addEventListener("drop", function(ev) 
            {
				
                var td=ev.srcElement||ev.target;       
                if(td.getAttribute("tag")!=null)
                {
                    td.appendChild(draggedCanvas);
                }
                var allHaveFlag=true;
                var indexStr="";
                for(var i=0;i<5;i++)
                {
                    for(var j=0;j<5;j++)
                    {
                        canvas=document.getElementById("dest_table").rows[i].cells[j].children[0];
                        if(canvas==null)
                        {
                            allHaveFlag=false;
                            indexStr="";
                            break;
                        }
                        else
                        {
                            indexStr+=canvas.getAttribute("index");
                        }
                    }
                }
                if(allHaveFlag&&indexStr=="0123456789101112131415161718192021222324")
                    alert("恭喜您，您赢了！");
                ev.preventDefault();
                ev.stopPropagation();
            }, false);
        }	
    }

}