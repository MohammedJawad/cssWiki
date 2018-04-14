$(document).ready(function(){
	var code = $(".codemirror-textarea")[0];
	var editor = CodeMirror.fromTextArea(code, {
		lineNumbers : true
	});

	//Quand le form est soumis
	$("#preview-form").submit(function(e){
		var value = editor.getValue();
		if(value.length === 0){
			alert("Écrivez quelque chose!");
		}
	});
});