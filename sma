    var arr=[];//array, last value is newest data
    
    var sma=[];
    
    //may need to reverse arr
    
    var of=13; //avg param period
    
    var sec=[];//section
    
    var i=[arr.length-(of-1),0];
	while(i[0]--){
		sec=arr.slice(i[1]-of,i[1]);
		a=of;
		avg=0.0;
		while(a--){
			avg+=sec[a];
			}
		sma.unshift(avg/of);
		i[1]+=1;
		}
	i=sma[0];
	while(of--){sma.unshift(i);}//fit length to original with oldest value
		
		//sma is simple moving average
