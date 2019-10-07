<html> 
<head> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script> 
<script src="http://www.skulpt.org/js/skulpt.min.js" type="text/javascript"></script> 
<script src="http://www.skulpt.org/js/skulpt-stdlib.js" type="text/javascript"></script> 

</head> 

<body> 

<script type="text/javascript"> 
function outf(text) { 
	var mypre = document.getElementById("output"); 
	mypre.innerHTML = mypre.innerHTML + text; 
} 
function builtinRead(x) {
	if (Sk.builtinFiles === undefined || Sk.builtinFiles["files"][x] === undefined)
			throw "File not found: '" + x + "'";
	return Sk.builtinFiles["files"][x];
}
// Here's everything you need to run a python program in skulpt
// grab the code from your textarea
// get a reference to your pre element for output
// configure the output function
// call Sk.importMainWithBody()
var code = "import requests\nheaders = {'Content-Type':'application/json','API-Key':'ApOCQySvckqOkjjLIUVsNmqa9DiJ8HRr0ZW'}\nparams = {'guild':629040731159396391,'option':'language'}\nanswer = requests.get('http://51.77.212.245:8080/api/dashboard/get_option',headers=headers,json=params)";

function runit() {
	var code = "import requests\nheaders = {'Content-Type':'application/json','API-Key':'ApOCQySvckqOkjjLIUVsNmqa9DiJ8HRr0ZW'}\nparams = {'guild':629040731159396391,'option':'language'}\nanswer = requests.get('http://51.77.212.245:8080/api/dashboard/get_option',headers=headers,json=params)";
   var prog = code; 
   var output = document.getElementById("output");
   Sk.pre = "output";
   Sk.configure({output:outf, read:builtinRead}); 
   (Sk.TurtleGraphics || (Sk.TurtleGraphics = {})).target = 'mycanvas';
   var myPromise = Sk.misceval.asyncToPromise(function() {
	   return Sk.importMainWithBody("<stdin>", false, prog, true);
   });
   myPromise.then(function(mod) {
	   console.log('success');
   },
	   function(err) {
	   console.log(err.toString());
   });
} 


</script> 

<span onclick="runit('code');" id="output">Click</span>

</body> 

</html> 