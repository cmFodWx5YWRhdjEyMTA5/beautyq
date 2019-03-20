(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["rules-rules-module"],{

/***/ "./src/app/rules/rules.module.ts":
/*!***************************************!*\
  !*** ./src/app/rules/rules.module.ts ***!
  \***************************************/
/*! exports provided: RulesPageModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "RulesPageModule", function() { return RulesPageModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm5/common.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var _ionic_angular__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @ionic/angular */ "./node_modules/@ionic/angular/dist/fesm5.js");
/* harmony import */ var _rules_page__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./rules.page */ "./src/app/rules/rules.page.ts");







var routes = [
    {
        path: '',
        component: _rules_page__WEBPACK_IMPORTED_MODULE_6__["RulesPage"]
    }
];
var RulesPageModule = /** @class */ (function () {
    function RulesPageModule() {
    }
    RulesPageModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"],
                _angular_forms__WEBPACK_IMPORTED_MODULE_3__["FormsModule"],
                _ionic_angular__WEBPACK_IMPORTED_MODULE_5__["IonicModule"],
                _angular_router__WEBPACK_IMPORTED_MODULE_4__["RouterModule"].forChild(routes)
            ],
            declarations: [_rules_page__WEBPACK_IMPORTED_MODULE_6__["RulesPage"]]
        })
    ], RulesPageModule);
    return RulesPageModule;
}());



/***/ }),

/***/ "./src/app/rules/rules.page.html":
/*!***************************************!*\
  !*** ./src/app/rules/rules.page.html ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<ion-header>\n  <ion-toolbar>\n    <ion-title>Regras Básicas</ion-title>\n  </ion-toolbar>\n</ion-header>\n\n<ion-content padding>\n\n  <ion-list>\n    <ion-item>A pontuação que você receber é exclusiva para uso no salão que ofereceu</ion-item>\n    <ion-item>A pontuação de um salão não é válida em outro</ion-item>\n    <ion-item>Cada Salão define sua política de ganho e de troca</ion-item>\n    <ion-item>Para cadastrar um salão novo você precisa do QR Code</ion-item>\n    <ion-item>Pontos não podem ser convertidos em dinheiro</ion-item>\n    <ion-item>Para ganhar os pontos do Checkin, você precisa ativar a geolocalização e permanecer ao menos 15 min no Salão (ou ser confirmado pelo admin do Salão)</ion-item>\n  </ion-list>\n\n  <ion-button expand=\"block\" fill=\"outline\" href=\"/home\">Continuar</ion-button>\n\n</ion-content>"

/***/ }),

/***/ "./src/app/rules/rules.page.scss":
/*!***************************************!*\
  !*** ./src/app/rules/rules.page.scss ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".item {\n  padding: 10px 0px;\n  border: 0px;\n  --inner-border-width: 0px; }\n\n.item-native {\n  margin: 0px !important;\n  padding: 0px !important;\n  --padding-start: 0px !important; }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9sZW9uYXJkby9Qcm9qZWN0cy9iZWF1dHlxL2FwcC9zcmMvYXBwL3J1bGVzL3J1bGVzLnBhZ2Uuc2NzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtFQUNJLGlCQUFpQjtFQUNqQixXQUFXO0VBQ1gseUJBQXFCLEVBQUE7O0FBR3pCO0VBQ0ksc0JBQXNCO0VBQ3RCLHVCQUF1QjtFQUN2QiwrQkFBZ0IsRUFBQSIsImZpbGUiOiJzcmMvYXBwL3J1bGVzL3J1bGVzLnBhZ2Uuc2NzcyIsInNvdXJjZXNDb250ZW50IjpbIi5pdGVtIHtcbiAgICBwYWRkaW5nOiAxMHB4IDBweDtcbiAgICBib3JkZXI6IDBweDtcbiAgICAtLWlubmVyLWJvcmRlci13aWR0aDogMHB4O1xufVxuXG4uaXRlbS1uYXRpdmUge1xuICAgIG1hcmdpbjogMHB4ICFpbXBvcnRhbnQ7XG4gICAgcGFkZGluZzogMHB4ICFpbXBvcnRhbnQ7XG4gICAgLS1wYWRkaW5nLXN0YXJ0OiAwcHggIWltcG9ydGFudDtcbn0iXX0= */"

/***/ }),

/***/ "./src/app/rules/rules.page.ts":
/*!*************************************!*\
  !*** ./src/app/rules/rules.page.ts ***!
  \*************************************/
/*! exports provided: RulesPage */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "RulesPage", function() { return RulesPage; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");


var RulesPage = /** @class */ (function () {
    function RulesPage() {
    }
    RulesPage.prototype.ngOnInit = function () {
    };
    RulesPage = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'app-rules',
            template: __webpack_require__(/*! ./rules.page.html */ "./src/app/rules/rules.page.html"),
            styles: [__webpack_require__(/*! ./rules.page.scss */ "./src/app/rules/rules.page.scss")]
        }),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [])
    ], RulesPage);
    return RulesPage;
}());



/***/ })

}]);
//# sourceMappingURL=rules-rules-module.js.map