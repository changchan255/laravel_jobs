/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/components/_inc_auth.js":
/*!**********************************************!*\
  !*** ./resources/js/components/_inc_auth.js ***!
  \**********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
var Auth = {
  init: function init() {
    this.postLogin();
    this.postRegister();
    this.runToken();
  },
  runToken: function runToken() {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  },
  postRegister: function postRegister() {
    $(".js-register").click(function (event) {
      event.preventDefault();
      var $form = $("#formRegister");
      var formData = $form.serialize();
      $.ajax({
        url: $form.attr('action'),
        type: 'POST',
        data: formData,
        success: function success(data) {
          console.log(data);
        },
        error: function error(response) {
          if (response.status === 422) {
            $.each(response.responseJSON.errors, function (field_name, error) {
              $(document).find('[name=' + field_name + ']').parent().after('<span class="text-error">' + error + '</span>');
            });
          }
        }
      });
    });
  },
  postLogin: function postLogin() {
    $(".js-login").click(function (event) {
      event.preventDefault();
      var $formLogin = $("#formLogin");
      var formData = $formLogin.serialize();
      $.ajax({
        url: $formLogin.attr('action'),
        type: 'POST',
        data: formData,
        success: function success(response) {
          if (response.status == 200) {
            location.reload();
          }
        },
        error: function error(data) {
          if (response.status === 422) {
            $.each(response.responseJSON.errors, function (field_name, error) {
              $(document).find('[name=' + field_name + ']').parent().after('<span class="text-error">' + error + '</span>');
            });
          }
        }
      });
      console.log("login");
    });
  }
};
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Auth);

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!************************************!*\
  !*** ./resources/js/pages/home.js ***!
  \************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var C_Users_Admin_laravel_jobs_resources_js_components_inc_auth__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./resources/js/components/_inc_auth */ "./resources/js/components/_inc_auth.js");

var Home = {
  init: function init() {}
};
$(function () {
  Home.init();
  C_Users_Admin_laravel_jobs_resources_js_components_inc_auth__WEBPACK_IMPORTED_MODULE_0__["default"].init();
});
})();

/******/ })()
;