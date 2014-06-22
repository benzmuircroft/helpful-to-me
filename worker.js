//main thread


if(typeof(Worker)!==undefined){
	var w=new Worker('_S/work.js');
	w.addEventListener('message',function(e){
  		console.dir(e.data);
		},false);
	w.postMessage('k');
	}
				



			
//work.js



self.importScripts(
	"external1.js",
	"external2.js"
	);

self.addEventListener('message',function(e){
    if(e.data==='k'){
    	self.postMessage(JSON.stringify({'some':'thing'}));
    	}});
