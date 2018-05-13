<title>PHP Classifier</title>
<style type="text/css">
	label { display: block; }
</style>

<h1>Train</h1>
<form action="javascript:train();" id="train_form">
	<label for="train">Classify text like this:</label>
	<input type="text" id="train" name="train">
	<label for="category">Under this category:</label>
	<input type="text" id="category" name="category">
	<button>Train</button>
	<div id="train_output"></div>
</form>

<h1>Classify</h1>
<form action="javascript:classify();" id="classify_form">
	<label for="classify">Find what category fits this text:</label>
	<input type="text" id="classify" name="classify">
	<button>Classify</button>
	<div id="classify_output"></div>
</form>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
	function train(){
		url = 'train.php?' + $('#train_form').serialize()
		$.get(url, function(result){
			alert(result)
		})
	}
	function classify(){
		url = 'classify.php?' + $('#classify_form').serialize()
		$.get(url, function(result){
			alert(result)
		})
	}
</script>