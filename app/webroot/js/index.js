

jQuery(document).ready(function($){

	

	/*function traduz(idioma) {
		if(idioma == "pt"){
			$("#btn_1").html("Home Page");
			$("#btn_2").html("Status");
			$("#btn_3").html("Ranking");
			$("#btn_4").html("Personalidades");
			$("#btn_buy_android").html("Versão para Android");
			$("#btn_buy_ios").html("Versão para IOS");
			$("#btn_buy_facebook").html("Versão para Facebook");
			$("#usuario_popular").html("Jogador mais popular!");

		}else if(idioma == "eu"){
			$("#btn_1").html("Home");
			$("#btn_2").html("My Status");
			$("#btn_3").html("Ranking");
			$("#btn_4").html("Personalities");
			$("#btn_buy_android").html("Available in Android");
			$("#btn_buy_ios").html("Available in  IOS");
			$("#btn_buy_facebook").html("Available in Facebook");
			$("#usuario_popular").html("Most popular player!");

		}


		$("#btn_pt").click(function() {
			traduz("pt");
		});
		$("#btn_eu").click(function() {
			traduz("eu");
		});
	}*/

	
	function R_btn1 () {
		//Return button 1
		
		$("#btn_1").animate({
	    	width: "60px",
	  	}, 300 );
		$("#btn_1").animate({
	    	marginTop: "0px",
	  	}, 600 );
	  	
	}
	function V_btn1 () {
		$("#btn_1").animate({
	    	marginTop: "60px",
	  	}, 600 );
	  	$("#btn_1").animate({
	    	width: "490px",
	  	}, 300 );

	}

	function R_btn2 () {
		$("#btn_2").animate({
	    	marginLeft: "60px",
	  	}, 100 );
		$("#btn_2").animate({
	    	width: "60px",
	  	}, 300 );
	  	$("#btn_2").animate({
	    	marginTop: "0px",
	  	}, 600 );
	}
	function V_btn2 () {
	  	$("#btn_2").animate({
	    	width: "490px",
	  	}, 300 );
	  	$("#btn_2").animate({
	    	marginTop: "60px",
	  	}, 600 );
	  	$("#btn_2").animate({
	    	marginLeft: "0px",
	  	}, 100 );
	}

	function R_btn3 () {
		$("#btn_3").animate({
	    	marginLeft: "130px",
	  	}, 100 );
		$("#btn_3").animate({
	    	width: "60px",
	  	}, 300 );
	  	$("#btn_3").animate({
	    	marginTop: "0px",
	  	}, 600 );
	}
	function V_btn3 () {
	  	$("#btn_3").animate({
	    	width: "490px",
	  	}, 300 );
	  	$("#btn_3").animate({
	    	marginTop: "60px",
	  	}, 600 );
	  	$("#btn_3").animate({
	    	marginLeft: "0px",
	  	}, 100 );
	}

	function R_btn4 () {
		$("#btn_4").animate({
	    	marginLeft: "200px",
	  	}, 100 );
		$("#btn_4").animate({
	    	width: "60px",
	  	}, 300 );
	  	$("#btn_4").animate({
	    	marginTop: "0px",
	  	}, 600 );
	}
	function V_btn4 () {
	  	$("#btn_4").animate({
	    	width: "490px",
	  	}, 300 );
	  	$("#btn_4").animate({
	    	marginTop: "60px",
	  	}, 600 );
	  	$("#btn_4").animate({
	    	marginLeft: "0px",
	  	}, 100 );
	}

	function R_btn5 () {
		$("#btn_5").animate({
	    	marginLeft: "270px",
	  	}, 100 );
		$("#btn_5").animate({
	    	width: "60px",
	  	}, 300 );
	  	$("#btn_5").animate({
	    	marginTop: "0px",
	  	}, 600 );
	}
	function V_btn5 () {
	  	$("#btn_5").animate({
	    	width: "490px",
	  	}, 300 );
	  	$("#btn_5").animate({
	    	marginTop: "60px",
	  	}, 600 );
	  	$("#btn_5").animate({
	    	marginLeft: "0px",
	  	}, 100 );
	}

	function R_btn6 () {
		$("#btn_6").animate({
	    	marginLeft: "340px",
	  	}, 100 );
		$("#btn_6").animate({
	    	width: "70px",
	  	}, 300 );
	  	$("#btn_6").animate({
	    	marginTop: "0px",
	  	}, 600 );
	}
	function V_btn6 () {
	  	$("#btn_6").animate({
	    	width: "490px",
	  	}, 300 );
	  	$("#btn_6").animate({
	    	marginTop: "60px",
	  	}, 600 );
	  	$("#btn_6").animate({
	    	marginLeft: "0px",
	  	}, 100 );
	}
	function R_btn7 () {
		$("#btn_7").animate({
	    	marginLeft: "420px",
	  	}, 100 );
		$("#btn_7").animate({
	    	width: "70px",
	  	}, 300 );
	  	$("#btn_7").animate({
	    	marginTop: "0px",
	  	}, 600 );
	}
	function V_btn7 () {
	  	$("#btn_7").animate({
	    	width: "490px",
	  	}, 300 );
	  	$("#btn_7").animate({
	    	marginTop: "60px",
	  	}, 600 );
	  	$("#btn_7").animate({
	    	marginLeft: "0px",
	  	}, 100 );

	}


	$("#btn_1").click(function() {
		
		
		V_btn1();
		$("#btn_2").animate({
	    	width: "120px",
	  	}, 1200 );
	  	$("#btn_2").animate({
	    	marginLeft: "0px",
	  	}, 300 );
	  	$("#btn_2").animate({
	    	marginTop: "0px",
	  	}, 600 );
		R_btn3();
		R_btn4();
		R_btn5();
		R_btn6();
		R_btn7();
		$("#center").animate({
	    	marginTop: "0px",
	  	}, 600 );
	});
	$("#btn_2").click(function() {
		V_btn2();
		$("#btn_1").animate({
	    	width: "120px",
	  	}, 1200 );
	  	$("#btn_1").animate({
	    	marginLeft: "0px",
	  	}, 300 );
	  	$("#btn_1").animate({
	    	marginTop: "0px",
	  	}, 600 );
	  	R_btn3();
	  	R_btn4();
	  	R_btn5();
	  	R_btn6();
	  	R_btn7();

		$("#center").animate({
	    	marginTop: "-700px",
	  	}, 600 );
	});
	$("#btn_3").click(function() {
		V_btn3();
		R_btn1();
		R_btn2();
		$("#btn_4").animate({
	    	width: "120px",
	  	}, 1200 );
	  	$("#btn_4").animate({
	    	marginLeft: "140px",
	  	}, 300 );
	  	$("#btn_4").animate({
	    	marginTop: "0px",
	  	}, 600 );
		R_btn5();
		R_btn6();
		R_btn7();

		$("#center").animate({
	    	marginTop: "-1500px",
	  	}, 600 );
	});
	$("#btn_4").click(function() {
		V_btn4();
		R_btn1();
		R_btn2();
		R_btn3();
		//R_btn5();
		$("#btn_5").animate({
	    	width: "120px",
	  	}, 1200 );
	  	$("#btn_5").animate({
	    	marginLeft: "210px",
	  	}, 300 );
	  	$("#btn_5").animate({
	    	marginTop: "0px",
	  	}, 600 );
		R_btn6();
		R_btn7();
		$("#center").animate({
	    	marginTop: "-2300px",
	  	}, 600 );
	});
	$("#btn_5").click(function() {
		V_btn5();
		R_btn1();
		R_btn2();
		R_btn3();
		R_btn4();
		//R_btn6();
		$("#btn_6").animate({
	    	width: "130px",
	  	}, 1200 );
	  	$("#btn_6").animate({
	    	marginLeft: "280px",
	  	}, 300 );
	  	$("#btn_6").animate({
	    	marginTop: "0px",
	  	}, 600 );
		R_btn7();
		$("#center").animate({
	    	marginTop: "-3100px",
	  	}, 600 );
	});
	$("#btn_6").click(function() {
		V_btn6();
		R_btn1();
		R_btn2();
		R_btn3();
		R_btn4();
		R_btn5();

		$("#btn_7").animate({
	    	width: "140px",
	  	}, 1200 );
	  	$("#btn_7").animate({
	    	marginLeft: "350px",
	  	}, 300 );
	  	$("#btn_7").animate({
	    	marginTop: "0px",
	  	}, 600 );

		$("#center").animate({
	    	marginTop: "-3100px",
	  	}, 600 );

		$("#center").animate({
	    	marginTop: "-3900px",
	  	}, 600 );
	});
	$("#btn_7").click(function() {
		V_btn7();
		R_btn1();
		R_btn2();
		R_btn3();
		R_btn4();
		R_btn5();
		
		$("#btn_6").animate({
	    	width: "140px",
	  	}, 1200 );
	  	$("#btn_6").animate({
	    	marginLeft: "350px",
	  	}, 300 );
	  	$("#btn_6").animate({
	    	marginTop: "0px",
	  	}, 600 );

		$("#center").animate({
	    	marginTop: "-4700px",
	  	}, 600 );
	});



});
