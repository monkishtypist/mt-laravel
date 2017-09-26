/**
 * API.ai - MonkishTypist
 */

var accessToken = "6656fd6c0d114f8e90f53343d0da7830",
	baseUrl = "https://api.api.ai/v1/",
	$speechInput,
	$recBtn,
	recognition,
	messageRecording = "Listening...",
	messageCouldntHear = "I couldn't hear you, could you say that again?",
	messageInternalError = "Oh no, there has been an internal server error",
	messageSorry = "I'm sorry, I don't have the answer to that yet.";
$(document).ready(function() {
	$speechInput = $("#speech");
	$recBtn = $("#rec");
	respond('Hello. Welcome to MonkishTypist.com');
	respond('How can I help you today?');
	$speechInput.keypress(function(event) {
		if (event.which == 13) {
			event.preventDefault();
			send();
		}
	});
	$recBtn.on("click", function(event) {
		switchRecognition();
	});
	$(".debug__btn").on("click", function() {
		$(this).next().toggleClass("is-active");
		return false;
	});
});
function startRecognition() {
	$speechInput.val(null);
	recognition = new webkitSpeechRecognition();
	recognition.continuous = false;
			recognition.interimResults = false;
	recognition.onstart = function(event) {
		startListening(messageRecording);
		updateRec();
		console.log(event);
	};
	recognition.onresult = function(event) {
		recognition.onend = null;
		
		var text = "";
			for (var i = event.resultIndex; i < event.results.length; ++i) {
				text += event.results[i][0].transcript;
			}
			setInput(text);
		stopRecognition();
	};
	recognition.onend = function() {
		respond(messageCouldntHear);
		stopRecognition();
	};
	recognition.lang = "en-US";
	recognition.start();
}

function stopRecognition() {
	if (recognition) {
		recognition.stop();
		recognition = null;
	}
	updateRec();
}
function switchRecognition() {
	if (recognition) {
		stopRecognition();
	} else {
		startRecognition();
	}
}
function setInput(text) {
	stopListening();
	$speechInput.val(text);
	send();
}
function updateRec() {
	$recBtn.text(recognition ? "Stop" : "Speak");
	}
function send() {
	var text = $speechInput.val();
	$speechInput.val("");
	ask(text);
	$.ajax({
		type: "POST",
		url: baseUrl + "query",
		contentType: "application/json; charset=utf-8",
		dataType: "json",
		headers: {
			"Authorization": "Bearer " + accessToken
		},
		data: JSON.stringify({query: text, lang: "en", sessionId: "yaydevdiner"}),
		success: function(data) {
			prepareResponse(data);
		},
		error: function() {
			respond(messageInternalError);
		}
	});
}
function prepareResponse(val) {
	var debugJSON = JSON.stringify(val, undefined, 2),
		spokenResponse = val.result.speech;
	respond(spokenResponse);
	debugRespond(debugJSON);
}
function debugRespond(val) {
	$("#response").text(val);
}
function startListening(val) {
	$speechInput.attr("placeholder", val);
}
function stopListening() {
	$speechInput.attr("placeholder", "Ask me another question");
}
function ask(val) {
	if (val !== "") {
		$("#spokenResponse").find(".spoken-response__text").append('<li class="text-right">' + val + '</li>');
	}
}
function respond(val) {
	if (val == "") {
		val = messageSorry;
	}
	if (val !== messageRecording) {
		var msg = new SpeechSynthesisUtterance();
		msg.voiceURI = "native";
		msg.text = val;
		msg.lang = "en-US";
		window.speechSynthesis.speak(msg);
	}
	$("#spokenResponse").find(".spoken-response__text").append('<li class="text-left">' + val + '</li>');
}
