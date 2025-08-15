/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./node_modules/sweetalert2/dist/sweetalert2.all.js":
/*!**********************************************************!*\
  !*** ./node_modules/sweetalert2/dist/sweetalert2.all.js ***!
  \**********************************************************/
/***/ (() => {

eval("{throw new Error(\"Module build failed: Error: ENOENT: no such file or directory, open '/Users/luigi/Local Sites/finsweet1/app/public/wp-content/themes/finsweet1/node_modules/sweetalert2/dist/sweetalert2.all.js'\");\n\n//# sourceURL=webpack://change-me/./node_modules/sweetalert2/dist/sweetalert2.all.js?\n}");

/***/ }),

/***/ "./src/index.js":
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("{__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scripts_Drawer__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./scripts/Drawer */ \"./src/scripts/Drawer.js\");\n/* harmony import */ var _scripts_FormContactUs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./scripts/FormContactUs */ \"./src/scripts/FormContactUs.js\");\n/* harmony import */ var _scripts_FormNewsletter__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./scripts/FormNewsletter */ \"./src/scripts/FormNewsletter.js\");\n\n\n\n\ndocument.addEventListener('DOMContentLoaded', function () {\n  new _scripts_Drawer__WEBPACK_IMPORTED_MODULE_0__[\"default\"]('#drawer', '#drawer-toggle', '#drawer-close')\n\n  const contactUsForm = document.querySelector('#contact-us-form');\n  if (contactUsForm) {\n    new _scripts_FormContactUs__WEBPACK_IMPORTED_MODULE_1__[\"default\"]('#contact-us-form');\n  }\n\n  const newsletterForm = document.querySelector('#newsletter-form');\n  if (newsletterForm) {\n    new _scripts_FormNewsletter__WEBPACK_IMPORTED_MODULE_2__[\"default\"]('#newsletter-form');\n  }\n});\n\n\n//# sourceURL=webpack://change-me/./src/index.js?\n}");

/***/ }),

/***/ "./src/scripts/Drawer.js":
/*!*******************************!*\
  !*** ./src/scripts/Drawer.js ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("{__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\nclass Drawer {\n    constructor(drawerSelector, toggleSelector, closeSelector) {\n        this.drawer = document.querySelector(drawerSelector)\n        this.toggle = document.querySelector(toggleSelector)\n        this.close = closeSelector ? document.querySelector(closeSelector) : null\n\n        if (this.toggle && this.drawer) {\n            this.toggle.addEventListener('click', () => this.toggleDrawer())\n        }\n\n        if (this.close && this.drawer) {\n            this.close.addEventListener('click', () => this.closeDrawer())\n        }\n\n        window.addEventListener('resize', this.handleResize.bind(this))\n\n        document.addEventListener('keydown', (event) => {\n            const isEscKeyPressed = event.key === 'Escape'\n            if(isEscKeyPressed) {\n                this.closeDrawer()\n            }\n        })\n    }\n\n    toggleDrawer() {\n        const isOpen = this.toggle.classList.contains('open')\n        if(isOpen) {\n            this.closeDrawer()\n        } else {\n            this.openDrawer()\n        }\n    }\n\n    openDrawer() {\n        this.toggle.classList.add('open')\n        this.drawer.classList.remove('h-0')\n        this.drawer.classList.add('h-screen')\n    }\n\n    closeDrawer() {\n        this.toggle.classList.remove('open')\n        this.drawer.classList.remove('h-screen') \n        this.drawer.classList.add('h-0')\n    }\n\n    handleResize() {\n        const currentWidth = window.innerWidth;\n        const isLargeViewport = currentWidth >= 1024;\n        const isOpen = this.toggle.classList.contains('open');\n\n        if(isLargeViewport && isOpen) {\n            this.closeDrawer()\n        }\n    }\n}\n\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Drawer);\n\n//# sourceURL=webpack://change-me/./src/scripts/Drawer.js?\n}");

/***/ }),

/***/ "./src/scripts/FormContactUs.js":
/*!**************************************!*\
  !*** ./src/scripts/FormContactUs.js ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("{__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony import */ var _SweetAlert__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./SweetAlert */ \"./src/scripts/SweetAlert.js\");\n\n\nclass FormContactUs {\n    constructor(formSelector) {\n        this.form = document.querySelector(formSelector);\n\n        this.events();\n        this.swal = new _SweetAlert__WEBPACK_IMPORTED_MODULE_0__[\"default\"]()\n    }\n\n    events() {\n        this.form.addEventListener('submit', async (e) => {\n            e.preventDefault();\n\n            const formData = new FormData(this.form);\n\n            try {\n                const response = await fetch(siteData.root_url + '/wp-json/wp/v1/contact-us', {\n                    method: 'POST',\n                    headers: {\n                        'X-WP-Nonce': siteData.nonce,\n                    },\n                    body: formData\n                });\n\n                const data = await response.json();\n\n                if (!response.ok) {\n                    const errorMessage = data.message || response.statusText || `HTTP error! status: ${response.status}`;\n                    throw new Error(errorMessage);\n                }\n                \n                this.swal.success({\n                    title: 'Message Sent!',\n                    text: 'Thank you for sending us a message! We will get back to you shortly.'\n                })\n\n                this.form.reset()\n            } catch (error) {\n                this.swal.error({\n                    title: 'Oops!',\n                    text: error.message\n                })\n            }\n        });\n    }\n}\n\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (FormContactUs);\n\n//# sourceURL=webpack://change-me/./src/scripts/FormContactUs.js?\n}");

/***/ }),

/***/ "./src/scripts/FormNewsletter.js":
/*!***************************************!*\
  !*** ./src/scripts/FormNewsletter.js ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("{__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony import */ var _SweetAlert__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./SweetAlert */ \"./src/scripts/SweetAlert.js\");\n\n\nclass FormNewsletter {\n    constructor(formSelector) {\n        this.form = document.querySelector(formSelector);\n\n        this.events();\n        this.swal = new _SweetAlert__WEBPACK_IMPORTED_MODULE_0__[\"default\"]()\n    }\n\n    events() {\n        this.form.addEventListener('submit', async (e) => {\n            e.preventDefault();\n\n            const formData = new FormData(this.form);\n\n            try {\n                const response = await fetch(siteData.root_url + '/wp-json/wp/v1/newsletter', {\n                    method: 'POST',\n                    headers: {\n                        'X-WP-Nonce': siteData.nonce,\n                    },\n                    body: formData\n                });\n\n                const data = await response.json();\n\n                if (!response.ok) {\n                    const errorMessage = data.message || response.statusText || `HTTP error! status: ${response.status}`;\n                    throw new Error(errorMessage);\n                }\n                \n                this.swal.success({\n                    title: 'Success!',\n                    text: 'You successfully subscribe to our newsletter!'\n                })\n\n                this.form.reset()\n            } catch (error) {\n                this.swal.error({\n                    title: 'Oops!',\n                    text: error.message\n                })\n            }\n        });\n    }\n}\n\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (FormNewsletter);\n\n//# sourceURL=webpack://change-me/./src/scripts/FormNewsletter.js?\n}");

/***/ }),

/***/ "./src/scripts/SweetAlert.js":
/*!***********************************!*\
  !*** ./src/scripts/SweetAlert.js ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("{__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony import */ var sweetalert2__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! sweetalert2 */ \"./node_modules/sweetalert2/dist/sweetalert2.all.js\");\n/* harmony import */ var sweetalert2__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(sweetalert2__WEBPACK_IMPORTED_MODULE_0__);\n\n\nclass SweetAlert {\n  constructor() {\n\n  }\n\n  success ({ title, text }) {\n    sweetalert2__WEBPACK_IMPORTED_MODULE_0___default().fire({\n        title,\n        text,\n        icon: 'success',\n        confirmButtonText: 'Okay',\n        customClass: {\n            popup: 'bg-grey',\n            title: 'font-poppins',\n            htmlContainer: 'font-roboto text-primary',\n            confirmButton: 'font-roboto !bg-blue uppercase !text-white',\n        },\n    });\n  }\n\n  error ({ title, text}) {\n    sweetalert2__WEBPACK_IMPORTED_MODULE_0___default().fire({\n        title,\n        text,\n        icon: 'error',\n        confirmButtonText: 'Okay',\n        customClass: {\n            popup: 'bg-grey',\n            title: 'font-poppins text-red-700 text-h5',\n            htmlContainer: 'font-poppins text-black text-paragraph',\n            confirmButton: 'font-poppins uppercase !bg-red-500 !text-white rounded-full px-6 py-3 hover:!bg-red-600',\n        },\n    });\n  }\n}\n\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (SweetAlert);\n\n//# sourceURL=webpack://change-me/./src/scripts/SweetAlert.js?\n}");

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
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
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
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./src/index.js");
/******/ 	
/******/ })()
;