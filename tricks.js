//copy a simple variable

function copy(x){return JSON.stringify(x);}




//using closeure to pass a nulled variable into a function



(function(){


  function next(private){console.log(private);}

  function transportprivate(){
    var hidden='f6e4cd3ab2a9f84c8cbff644b384130f84d7ef79b60234301de5cb5c82d7';
    (function(){var cp=JSON.stringify(hidden);hidden=null;next(cp);})();
    }
  
  
  })();
