(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["register-register-module"],{

/***/ "./src/app/register/register.module.ts":
/*!*********************************************!*\
  !*** ./src/app/register/register.module.ts ***!
  \*********************************************/
/*! exports provided: RegisterPageModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "RegisterPageModule", function() { return RegisterPageModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm5/common.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var _ionic_angular__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @ionic/angular */ "./node_modules/@ionic/angular/dist/fesm5.js");
/* harmony import */ var _register_page__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./register.page */ "./src/app/register/register.page.ts");







var routes = [
    {
        path: '',
        component: _register_page__WEBPACK_IMPORTED_MODULE_6__["RegisterPage"]
    }
];
var RegisterPageModule = /** @class */ (function () {
    function RegisterPageModule() {
    }
    RegisterPageModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"],
                _angular_forms__WEBPACK_IMPORTED_MODULE_3__["FormsModule"],
                _ionic_angular__WEBPACK_IMPORTED_MODULE_5__["IonicModule"],
                _angular_router__WEBPACK_IMPORTED_MODULE_4__["RouterModule"].forChild(routes)
            ],
            declarations: [_register_page__WEBPACK_IMPORTED_MODULE_6__["RegisterPage"]]
        })
    ], RegisterPageModule);
    return RegisterPageModule;
}());



/***/ }),

/***/ "./src/app/register/register.page.html":
/*!*********************************************!*\
  !*** ./src/app/register/register.page.html ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<ion-content padding class=\"background\">\n\n  <img src=\"./assets/logo.png\">\n\n  <ion-item>\n    <ion-label position=\"floating\">Nome</ion-label>\n    <ion-input type=\"text\"></ion-input>\n  </ion-item>\n\n  <ion-grid>\n    <ion-row>\n      <ion-col></ion-col>\n      <ion-col></ion-col>\n    </ion-row>\n  </ion-grid>\n\n  <ion-item>\n    <ion-label position=\"floating\">Data Nascimento</ion-label>\n    <ion-input type=\"date\"></ion-input>\n  </ion-item>\n\n  <ion-item>\n    <ion-label position=\"floating\">E-mail</ion-label>\n    <ion-input type=\"email\"></ion-input>\n  </ion-item>\n\n  <ion-item>\n    <ion-label position=\"floating\">Telefone</ion-label>\n    <ion-input type=\"tel\"></ion-input>\n  </ion-item>\n\n  <ion-item>\n    <ion-label position=\"floating\">Senha</ion-label>\n    <ion-input type=\"password\"></ion-input>\n  </ion-item>\n\n  <ion-list>\n    <ion-radio-group>\n      <ion-list-header>\n        <ion-label>Name</ion-label>\n      </ion-list-header>\n\n      <ion-item>\n        <ion-label>Biff</ion-label>\n        <ion-radio slot=\"start\" value=\"biff\" checked></ion-radio>\n      </ion-item>\n\n      <ion-item>\n        <ion-label>Griff</ion-label>\n        <ion-radio slot=\"start\" value=\"griff\"></ion-radio>\n      </ion-item>\n\n      <ion-item>\n        <ion-label>Buford</ion-label>\n        <ion-radio slot=\"start\" value=\"buford\"></ion-radio>\n      </ion-item>\n    </ion-radio-group>\n  </ion-list>\n\n  <p><a href=\"/login\">Já tenho Cadastro</a></p>\n  <ion-button size=\"large\" href=\"/rules\">Cadastrar</ion-button>\n\n</ion-content>"

/***/ }),

/***/ "./src/app/register/register.page.scss":
/*!*********************************************!*\
  !*** ./src/app/register/register.page.scss ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "ion-content {\n  --ion-background-color:#000; }\n\nimg {\n  width: auto;\n  max-width: 60%;\n  height: auto;\n  max-height: 60%;\n  margin: 30px auto;\n  display: grid; }\n\n.label-floating.sc-ion-label-ios-h {\n  color: #FFF !important; }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9sZW9uYXJkby9Qcm9qZWN0cy9iZWF1dHlxL2FwcC9zcmMvYXBwL3JlZ2lzdGVyL3JlZ2lzdGVyLnBhZ2Uuc2NzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtFQUNJLDJCQUF1QixFQUFBOztBQUczQjtFQUNJLFdBQVc7RUFDWCxjQUFjO0VBQ2QsWUFBWTtFQUNaLGVBQWU7RUFDZixpQkFBaUI7RUFDakIsYUFBYSxFQUFBOztBQUdqQjtFQUNJLHNCQUFzQixFQUFBIiwiZmlsZSI6InNyYy9hcHAvcmVnaXN0ZXIvcmVnaXN0ZXIucGFnZS5zY3NzIiwic291cmNlc0NvbnRlbnQiOlsiaW9uLWNvbnRlbnQge1xuICAgIC0taW9uLWJhY2tncm91bmQtY29sb3I6IzAwMDtcbn1cblxuaW1nIHtcbiAgICB3aWR0aDogYXV0bztcbiAgICBtYXgtd2lkdGg6IDYwJTtcbiAgICBoZWlnaHQ6IGF1dG87XG4gICAgbWF4LWhlaWdodDogNjAlO1xuICAgIG1hcmdpbjogMzBweCBhdXRvO1xuICAgIGRpc3BsYXk6IGdyaWQ7XG59XG5cbi5sYWJlbC1mbG9hdGluZy5zYy1pb24tbGFiZWwtaW9zLWgge1xuICAgIGNvbG9yOiAjRkZGICFpbXBvcnRhbnQ7XG59Il19 */"

/***/ }),

/***/ "./src/app/register/register.page.ts":
/*!*******************************************!*\
  !*** ./src/app/register/register.page.ts ***!
  \*******************************************/
/*! exports provided: RegisterPage */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "RegisterPage", function() { return RegisterPage; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");


var RegisterPage = /** @class */ (function () {
    function RegisterPage() {
    }
    RegisterPage.prototype.ngOnInit = function () {
    };
    RegisterPage = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'app-register',
            template: __webpack_require__(/*! ./register.page.html */ "./src/app/register/register.page.html"),
            styles: [__webpack_require__(/*! ./register.page.scss */ "./src/app/register/register.page.scss")]
        }),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [])
    ], RegisterPage);
    return RegisterPage;
}());



/***/ })

}]);
//# sourceMappingURL=register-register-module.js.map