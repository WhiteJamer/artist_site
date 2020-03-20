/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// identity function for calling harmory imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmory exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		Object.defineProperty(exports, name, {
/******/ 			configurable: false,
/******/ 			enumerable: true,
/******/ 			get: getter
/******/ 		});
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports) {

eval("\r\n$('.art-detail-triger').on('click', function (e) {\r\n    var artId = $(this).attr('data-id')\r\n    var imageUrl = $(this).attr('src');\r\n    var imageTitle = $(this).attr('alt');\r\n    var imageDescription = $(this).attr('data-description');\r\n    e.stopPropagation();\r\n    $('.modal__title').html('<h5>Галерея изображений</h5>');\r\n    $('.modal__content').html((\"\\n        <div class=\\\"row justify-content-center\\\">\\n            <a href=\\\"/arts/\" + artId + \"\\\">\\n                <img id=\\\"img-img\\\" src=\\\"\" + imageUrl + \"\\\" alt=\\\"\" + imageTitle + \"\\\">\\n            </a>\\n        </div>\\n        <div class=\\\"row justify-content-center\\\">\\n            <div class=\\\"col-md-12\\\">\\n                <h1 class=\\\"mt-5\\\">\" + imageTitle + \"</h1>\\n                <p>\" + imageDescription + \"</p>\\n            </div>\\n        </div>\\n        \"));\r\n\r\n})//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiMC5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy9yZXNvdXJjZXMvYXNzZXRzL2pzL2dhbGxlcnkuanM/NzZiMyJdLCJzb3VyY2VzQ29udGVudCI6WyJcclxuJCgnLmFydC1kZXRhaWwtdHJpZ2VyJykub24oJ2NsaWNrJywgZnVuY3Rpb24gKGUpIHtcclxuICAgIHZhciBhcnRJZCA9ICQodGhpcykuYXR0cignZGF0YS1pZCcpXHJcbiAgICB2YXIgaW1hZ2VVcmwgPSAkKHRoaXMpLmF0dHIoJ3NyYycpO1xyXG4gICAgdmFyIGltYWdlVGl0bGUgPSAkKHRoaXMpLmF0dHIoJ2FsdCcpO1xyXG4gICAgdmFyIGltYWdlRGVzY3JpcHRpb24gPSAkKHRoaXMpLmF0dHIoJ2RhdGEtZGVzY3JpcHRpb24nKTtcclxuICAgIGUuc3RvcFByb3BhZ2F0aW9uKCk7XHJcbiAgICAkKCcubW9kYWxfX3RpdGxlJykuaHRtbCgnPGg1PtCT0LDQu9C10YDQtdGPINC40LfQvtCx0YDQsNC20LXQvdC40Lk8L2g1PicpO1xyXG4gICAgJCgnLm1vZGFsX19jb250ZW50JykuaHRtbChgXHJcbiAgICAgICAgPGRpdiBjbGFzcz1cInJvdyBqdXN0aWZ5LWNvbnRlbnQtY2VudGVyXCI+XHJcbiAgICAgICAgICAgIDxhIGhyZWY9XCIvYXJ0cy8ke2FydElkfVwiPlxyXG4gICAgICAgICAgICAgICAgPGltZyBpZD1cImltZy1pbWdcIiBzcmM9XCIke2ltYWdlVXJsfVwiIGFsdD1cIiR7aW1hZ2VUaXRsZX1cIj5cclxuICAgICAgICAgICAgPC9hPlxyXG4gICAgICAgIDwvZGl2PlxyXG4gICAgICAgIDxkaXYgY2xhc3M9XCJyb3cganVzdGlmeS1jb250ZW50LWNlbnRlclwiPlxyXG4gICAgICAgICAgICA8ZGl2IGNsYXNzPVwiY29sLW1kLTEyXCI+XHJcbiAgICAgICAgICAgICAgICA8aDEgY2xhc3M9XCJtdC01XCI+JHtpbWFnZVRpdGxlfTwvaDE+XHJcbiAgICAgICAgICAgICAgICA8cD4ke2ltYWdlRGVzY3JpcHRpb259PC9wPlxyXG4gICAgICAgICAgICA8L2Rpdj5cclxuICAgICAgICA8L2Rpdj5cclxuICAgICAgICBgKTtcclxuXHJcbn0pXG5cblxuLy8gV0VCUEFDSyBGT09URVIgLy9cbi8vIHJlc291cmNlcy9hc3NldHMvanMvZ2FsbGVyeS5qcyJdLCJtYXBwaW5ncyI6IkFBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFhQSIsInNvdXJjZVJvb3QiOiIifQ==");

/***/ },
/* 1 */
/***/ function(module, exports) {

eval("$(document).ready(function(){\r\n\t$('.modal-triger').on('click', function(){\r\n\t\t$('#modal').toggleClass('active');\r\n\t\tconsole.log('gg');\r\n\t});\r\n\t$('.modal-triger *').on('click', function(e){\r\n\t\te.stopPropagation();\r\n\t});\r\n});//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiMS5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy9yZXNvdXJjZXMvYXNzZXRzL2pzL21vZGFsLmpzPzA0ZmMiXSwic291cmNlc0NvbnRlbnQiOlsiJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKXtcclxuXHQkKCcubW9kYWwtdHJpZ2VyJykub24oJ2NsaWNrJywgZnVuY3Rpb24oKXtcclxuXHRcdCQoJyNtb2RhbCcpLnRvZ2dsZUNsYXNzKCdhY3RpdmUnKTtcclxuXHRcdGNvbnNvbGUubG9nKCdnZycpO1xyXG5cdH0pO1xyXG5cdCQoJy5tb2RhbC10cmlnZXIgKicpLm9uKCdjbGljaycsIGZ1bmN0aW9uKGUpe1xyXG5cdFx0ZS5zdG9wUHJvcGFnYXRpb24oKTtcclxuXHR9KTtcclxufSk7XG5cblxuLy8gV0VCUEFDSyBGT09URVIgLy9cbi8vIHJlc291cmNlcy9hc3NldHMvanMvbW9kYWwuanMiXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSIsInNvdXJjZVJvb3QiOiIifQ==");

/***/ },
/* 2 */
/***/ function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(0);


/***/ }
/******/ ]);