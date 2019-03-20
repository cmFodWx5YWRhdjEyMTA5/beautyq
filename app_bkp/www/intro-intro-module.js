(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["intro-intro-module"],{

/***/ "./src/app/intro/intro.module.ts":
/*!***************************************!*\
  !*** ./src/app/intro/intro.module.ts ***!
  \***************************************/
/*! exports provided: IntroPageModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "IntroPageModule", function() { return IntroPageModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm5/common.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var _ionic_angular__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @ionic/angular */ "./node_modules/@ionic/angular/dist/fesm5.js");
/* harmony import */ var _intro_page__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./intro.page */ "./src/app/intro/intro.page.ts");







var routes = [
    {
        path: '',
        component: _intro_page__WEBPACK_IMPORTED_MODULE_6__["IntroPage"]
    }
];
var IntroPageModule = /** @class */ (function () {
    function IntroPageModule() {
    }
    IntroPageModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"],
                _angular_forms__WEBPACK_IMPORTED_MODULE_3__["FormsModule"],
                _ionic_angular__WEBPACK_IMPORTED_MODULE_5__["IonicModule"],
                _angular_router__WEBPACK_IMPORTED_MODULE_4__["RouterModule"].forChild(routes)
            ],
            declarations: [_intro_page__WEBPACK_IMPORTED_MODULE_6__["IntroPage"]]
        })
    ], IntroPageModule);
    return IntroPageModule;
}());



/***/ }),

/***/ "./src/app/intro/intro.page.html":
/*!***************************************!*\
  !*** ./src/app/intro/intro.page.html ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<ion-content>\n  <ion-slides pager=\"true\">\n\n    <ion-slide style=\"background-color: #eb502d\">\n      <img src=\"./assets/slide-1.png\">\n      <h1>Bem Vindo ao BeautyQ</h1>\n      <p>Aposente seus cartõezinhos de fidelidade em papel e tenha tudo aqui no mesmo lugar</p>\n    </ion-slide>\n\n    <ion-slide style=\"background-color: #e60a7d\">\n      <img src=\"./assets/slide-2.png\">\n      <h1>Troque pontos por produtos Grátis!</h1>\n      <p>Basta ler o QR code nos salões parceiros e acumular pontos para trocar por serviços e produtos incríveis!</p>\n    </ion-slide>\n\n    <ion-slide style=\"background-color: #911964\">\n      <img src=\"./assets/slide-3.png\">\n      <h1>Ganhe pontos na entrada</h1>\n      <p>Cadastre agora e já ganhe 2 pontos para usar no seu primeiro salão!</p>\n\n      <ion-button size=\"large\" href=\"/login\">ENTRE E GANHE $</ion-button>\n    </ion-slide>\n\n  </ion-slides>\n</ion-content>"

/***/ }),

/***/ "./src/app/intro/intro.page.scss":
/*!***************************************!*\
  !*** ./src/app/intro/intro.page.scss ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".swiper-container {\n  height: 100%; }\n\n.swiper-slide {\n  display: block;\n  padding: 25px; }\n\n.swiper-container-horizontal > .swiper-pagination-bullets {\n  bottom: 30px; }\n\n.swiper-slide img {\n  width: auto;\n  max-width: 80%;\n  height: auto;\n  max-height: 80%;\n  margin: 30px auto; }\n\n.swiper-slide h1,\n.swiper-slide p {\n  color: #FFF;\n  --ion-font-family: 'Quattrocento Sans', sans-serif;\n  font-family: var(--ion-font-family) !important; }\n\n.swiper-slide h1 {\n  text-transform: uppercase;\n  font-weight: 700; }\n\n.swiper-slide p {\n  font-weight: normal;\n  font-size: 16px;\n  line-height: 20px;\n  font-weight: 400; }\n\n.button {\n  margin-bottom: 30px !important; }\n\n.custom-swiper-pagination {\n  bottom: 30px !important;\n  left: 0;\n  width: 100%; }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9sZW9uYXJkby9Qcm9qZWN0cy9iZWF1dHlxL2FwcC9zcmMvYXBwL2ludHJvL2ludHJvLnBhZ2Uuc2NzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtFQUNJLFlBQVksRUFBQTs7QUFFaEI7RUFDSSxjQUFjO0VBQ2QsYUFBYSxFQUFBOztBQUVqQjtFQUNJLFlBQVksRUFBQTs7QUFFaEI7RUFDSSxXQUFXO0VBQ1gsY0FBYztFQUNkLFlBQVk7RUFDWixlQUFlO0VBQ2YsaUJBQWlCLEVBQUE7O0FBRXJCOztFQUVJLFdBQVc7RUFDWCxrREFBa0I7RUFDbEIsOENBQThDLEVBQUE7O0FBRWxEO0VBQ0kseUJBQXlCO0VBQ3pCLGdCQUFnQixFQUFBOztBQUVwQjtFQUNJLG1CQUFtQjtFQUNuQixlQUFlO0VBQ2YsaUJBQWlCO0VBQ2pCLGdCQUFnQixFQUFBOztBQUVwQjtFQUNJLDhCQUE4QixFQUFBOztBQUVsQztFQUNJLHVCQUF1QjtFQUN2QixPQUFPO0VBQ1AsV0FBVSxFQUFBIiwiZmlsZSI6InNyYy9hcHAvaW50cm8vaW50cm8ucGFnZS5zY3NzIiwic291cmNlc0NvbnRlbnQiOlsiLnN3aXBlci1jb250YWluZXIge1xuICAgIGhlaWdodDogMTAwJTtcbn1cbi5zd2lwZXItc2xpZGUge1xuICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgIHBhZGRpbmc6IDI1cHg7XG59XG4uc3dpcGVyLWNvbnRhaW5lci1ob3Jpem9udGFsPi5zd2lwZXItcGFnaW5hdGlvbi1idWxsZXRzIHtcbiAgICBib3R0b206IDMwcHg7XG59XG4uc3dpcGVyLXNsaWRlIGltZyB7XG4gICAgd2lkdGg6IGF1dG87XG4gICAgbWF4LXdpZHRoOiA4MCU7XG4gICAgaGVpZ2h0OiBhdXRvO1xuICAgIG1heC1oZWlnaHQ6IDgwJTtcbiAgICBtYXJnaW46IDMwcHggYXV0bztcbn1cbi5zd2lwZXItc2xpZGUgaDEsXG4uc3dpcGVyLXNsaWRlIHAge1xuICAgIGNvbG9yOiAjRkZGO1xuICAgIC0taW9uLWZvbnQtZmFtaWx5OiAnUXVhdHRyb2NlbnRvIFNhbnMnLCBzYW5zLXNlcmlmO1xuICAgIGZvbnQtZmFtaWx5OiB2YXIoLS1pb24tZm9udC1mYW1pbHkpICFpbXBvcnRhbnQ7XG59XG4uc3dpcGVyLXNsaWRlIGgxIHtcbiAgICB0ZXh0LXRyYW5zZm9ybTogdXBwZXJjYXNlO1xuICAgIGZvbnQtd2VpZ2h0OiA3MDA7XG59XG4uc3dpcGVyLXNsaWRlIHAge1xuICAgIGZvbnQtd2VpZ2h0OiBub3JtYWw7XG4gICAgZm9udC1zaXplOiAxNnB4O1xuICAgIGxpbmUtaGVpZ2h0OiAyMHB4O1xuICAgIGZvbnQtd2VpZ2h0OiA0MDA7XG59XG4uYnV0dG9uIHtcbiAgICBtYXJnaW4tYm90dG9tOiAzMHB4ICFpbXBvcnRhbnQ7XG59XG4uY3VzdG9tLXN3aXBlci1wYWdpbmF0aW9uIHtcbiAgICBib3R0b206IDMwcHggIWltcG9ydGFudDtcbiAgICBsZWZ0OiAwO1xuICAgIHdpZHRoOjEwMCU7XG59Il19 */"

/***/ }),

/***/ "./src/app/intro/intro.page.ts":
/*!*************************************!*\
  !*** ./src/app/intro/intro.page.ts ***!
  \*************************************/
/*! exports provided: IntroPage */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "IntroPage", function() { return IntroPage; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");


var IntroPage = /** @class */ (function () {
    function IntroPage() {
    }
    IntroPage.prototype.ngOnInit = function () {
    };
    IntroPage = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'app-intro',
            template: __webpack_require__(/*! ./intro.page.html */ "./src/app/intro/intro.page.html"),
            styles: [__webpack_require__(/*! ./intro.page.scss */ "./src/app/intro/intro.page.scss")]
        }),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [])
    ], IntroPage);
    return IntroPage;
}());



/***/ })

}]);
//# sourceMappingURL=intro-intro-module.js.map