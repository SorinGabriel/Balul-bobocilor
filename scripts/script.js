
	function vote(x)
	{
		var nume=x.getElementsByTagName("p")[0].innerHTML;
		if (confirm("Esti sigur ca il votezi pe "+nume+" ?"))
		{
			$.ajax({
			url: "/scripts/vote.php",
			method: "post",
			data: { concurent : nume },
			success: function (result) {
				alert(result);
				var y=document.getElementById("poll");
				var myNode=y.getElementsByTagName("article")[0];
				while (myNode.firstChild!=myNode.lastChild) {
					myNode.removeChild(myNode.lastChild);
				}
				myNode.innerHTML='<p style="padding-bottom:1em;font-size:1.4em;">Ati votat pentru '+nume+'</p>';
			}
			})
		}
	}
	
	function voteg(x)
	{
		var nume=x.getElementsByTagName("p")[0].innerHTML;
		if (confirm("Esti sigur ca o votezi pe "+nume+" ?"))
		{
			$.ajax({
			url: "/scripts/votegirls.php",
			method: "post",
			data: { concurent : nume },
			success: function (result) {
				alert(result);
				var y=document.getElementById("poll");
				var myNode=y.getElementsByTagName("article")[1];
				while (myNode.firstChild!=myNode.lastChild) {
					myNode.removeChild(myNode.lastChild);
				}
				myNode.innerHTML='<p style="padding-bottom:1em;font-size:1.4em;">Ati votat pentru '+nume+'</p>';
			}
			})
		}
	}