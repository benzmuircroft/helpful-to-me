//push from one server to remote server

//server 1


var net=require('net');
	var server=net.createServer(function(push){
	  
		push.write(JSON.stringify({'f':'conn','data':something}));
									 	  
    //push.on('func',function(_){});
		
		push.on('error',function(err){console.dir(err);});
		
		});
	server.listen(8012,function(){});
	
	
//server 2


var net=require('net');
	var pull=new net.Socket();
	pull.connect(8005,'127.0.0.1',function(){/*----*/console.log('HOOKED');
		pull.on('data',function(_){
			_=JSON.parse(_);
			console.dir(_);
			if		(_.f==='conn')		{conn(_.data);}
			else if	(_.f==='disconn')	{disconn(_.data);}
			else if (_.f==='func')		{func(_.data);}
		});
									 
		console.dir(pull);
		
		//pull.write ^ see above
		
		pull.on('error',function(err){console.dir(err);});
		});
