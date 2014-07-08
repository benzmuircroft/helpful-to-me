var fun={
    0: n,
    1: 'fun1',
    2: 'fun2',
    3: 'fun3',
    next: function(data){fun.n++;fun.[fun.n](data);}
    }

function fun1(data){fun.next(data);}

function fun2(data){fun.next(data);}

function fun3(data){console.log(data);}
