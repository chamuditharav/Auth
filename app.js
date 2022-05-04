//const img = document.getElementById("img")

//console.log(toBase64(img))




let camera_button = document.querySelector("#start-camera");
let video = document.querySelector("#video");
let click_button = document.querySelector("#click-photo");
let canvas = document.querySelector("#canvas");
let imgDataBox = document.querySelector("#imgData")
let userid = document.querySelector("#userID")

camera_button.addEventListener('click', async function() {
   	let stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false });
	video.srcObject = stream;
});

click_button.addEventListener('click', function() {
   	canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
   	let base64Data = canvas.toDataURL('image/jpeg');

   	console.log(base64Data);
    imgDataBox.textContent = base64Data
	sendData(userid.value, base64Data)

});


let sendData = (userID,imgData)=>{
	let dataParam = `userID=${userID}&imageData=${imgData}&addImages=`;
	$.ajax({
		url: `./API/insertData.php?`,
		data: dataParam,
		type: "post", 
		success: function() {
		  alert("Sent")
		},
		error: function() {
			alert("Error")
		}
	  });
}