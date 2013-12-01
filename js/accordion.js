$(document).ready(function() {

// activeType
$( "#accordion" ).accordion({ active: false });

	// getter
	var active = $( "#accordion" ).accordion( "option", "active" );
	 
	// setter
	$( "#accordion" ).accordion( "option", "active", false );

//animateType
$( "#accordion" ).accordion({ animate: "bounceslide" });

	// getter
	var animate = $( "#accordion" ).accordion( "option", "animate" );
	 
	// setter
	$( "#accordion" ).accordion( "option", "animate", "bounceslide" );

//collapsibleType
$( "#accordion" ).accordion({ collapsible: true });

	// getter
	var collapsible = $( "#accordion" ).accordion( "option", "collapsible" );
	 
	// setter
	$( "#accordion" ).accordion( "option", "collapsible", true );

//disabledType
$( "#accordion" ).accordion({ disabled: false });

	// getter
	var disabled = $( "#accordion" ).accordion( "option", "disabled" );
	 
	// setter
	$( "#accordion" ).accordion( "option", "disabled", false );


// eventType
$( "#accordion" ).accordion({ event: "click" });

	// getter
	var event = $( "#accordion" ).accordion( "option", "event" );
	 
	// setter
	$( "#accordion" ).accordion( "option", "event", "click" );

// header
$( "#accordion" ).accordion({ header: "h4" });
	// getter
	var header = $( "#accordion" ).accordion( "option", "header" );
 
	// setter
	$( "#accordion" ).accordion( "option", "header", "h4" );

// heightStyleType
$( "#accordion" ).accordion({ heightStyle: "content" });

	// getter
	var heightStyle = $( "#accordion" ).accordion( "option", "heightStyle" );
	 
	// setter
	$( "#accordion" ).accordion( "option", "heightStyle", "content" );

// icon
$( "#accordion" ).accordion({ icons: false});

}); 