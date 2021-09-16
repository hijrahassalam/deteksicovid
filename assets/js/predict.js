function PreviewImage() {
	// Initializing file reader
	var oFReader = new FileReader();
	oFReader.readAsDataURL(document.getElementById("image-selector").files[0]);

	oFReader.onload = function (oFREvent) {
		// change the source
		document.getElementById("selected-image").src = oFREvent.target.result;
		$("#prediction-list").empty();
	};
}

async function getPred() {
	// Initialize the model
	// get the model from assets
	var base_url = $("#base").val();
	const model = await tf.loadLayersModel(base_url);

	let image = $("#selected-image").get(0);

	let tensorImg = tf.browser
		.fromPixels(image)
		.resizeNearestNeighbor([224, 224])
		.toFloat()
		.expandDims();
	prediction = await model.predict(tensorImg).data();

	if (prediction[0] === 0) {
		$("#prediction-list").append("<li> COVID </li>");
	} else if (prediction[0] === 1) {
		$("#prediction-list").append("<li> NON COVID </li>");
	} else {
		predResult.innerHTML = "This is Something else";
	}
	//show(predResult);
}
