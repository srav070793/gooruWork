<html ng-app = 'gooruDashboard'>
	<head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Material Dashboard PRO Angular by Creative Tim | Premium Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!--  Material Dashboard CSS    -->
    <!--<link href="../assets/css/material-dashboard.css" rel="stylesheet">-->
     <!-- CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet">

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

<style type="text/css">/*!

 =========================================================
 * Material Dashboard PRO Angular CLI - V1.4.1
 =========================================================

 * Product Page: https://www.creative-tim.com/product/material-dashboard-pro-angular2
 * Copyright 2017 Creative Tim (https://www.creative-tim.com)
 * License Creative Tim (https://www.creative-tim.com/license)

 =========================================================

 */
/**
 * Applies styles for users in high contrast mode. Note that this only applies
 * to Microsoft browsers. Chrome can be included by checking for the `html[hc]`
 * attribute, however Chrome handles high contrast differently.
 */
/* Theme for the ripple elements.*/
/** The mixins below are shared between md-menu and md-select */
/**
 * This mixin adds the correct panel transform styles based
 * on the direction that the menu panel opens.
 */
/* stylelint-disable material/no-prefixes */
/* stylelint-enable */
/**
 * This mixin contains shared option styles between the select and
 * autocomplete components.
 */
.noUi-target,
.noUi-target * {
  -webkit-touch-callout: none;
  -ms-touch-action: none;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  box-sizing: border-box; }

.noUi-base {
  width: 100%;
  height: 100%;
  position: relative; }

.noUi-origin {
  position: absolute;
  right: 0;
  top: 0;
  left: 0;
  bottom: 0; }

.noUi-handle {
  position: relative;
  z-index: 1;
  box-sizing: border-box; }

.noUi-stacking .noUi-handle {
  z-index: 10; }

.noUi-state-tap .noUi-origin {
  transition: left 0.3s, top 0.3s; }

.noUi-state-drag * {
  cursor: inherit !important; }

.noUi-horizontal {
  height: 10px; }

.noUi-handle {
  box-sizing: border-box;
  width: 14px;
  height: 14px;
  border-color: #9c27b0;
  left: -10px;
  top: -6px;
  cursor: pointer;
  border-radius: 100%;
  transition: all 0.2s ease-out;
  border: 1px solid;
  background: #FFFFFF;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12); }

.noUi-vertical .noUi-handle {
  margin-left: 5px;
  cursor: ns-resize; }

.noUi-horizontal.noUi-extended {
  padding: 0 15px; }

.noUi-horizontal.noUi-extended .noUi-origin {
  right: -15px; }

.noUi-background {
  height: 2px;
  margin: 20px 0; }

.noUi-origin {
  margin: 0;
  border-radius: 0;
  height: 2px;
  background: #c8c8c8; }
  .noUi-origin[style^="left: 0"] .noUi-handle {
    background-color: #fff;
    border: 2px solid #c8c8c8; }
    .noUi-origin[style^="left: 0"] .noUi-handle.noUi-active {
      border-width: 1px; }

.noUi-target {
  border-radius: 3px; }

.noUi-horizontal {
  height: 2px;
  margin: 15px 0; }

.noUi-vertical {
  height: 100%;
  width: 2px;
  margin: 0 15px;
  display: inline-block; }

.noUi-handle.noUi-active {
  -webkit-transform: scale3d(1.5, 1.5, 1);
          transform: scale3d(1.5, 1.5, 1); }

[disabled] .noUi-connect {
  background: #B8B8B8; }

.noUi-connect {
  position: absolute;
  right: 0;
  top: 0;
  left: 0;
  bottom: 0; }

.noUi-state-tap .noUi-connect,
.noUi-state-tap .noUi-origin {
  transition: top 0.3s, right 0.3s, bottom 0.3s, left 0.3s; }

.noUi-connect {
  background: #3FB8AF;
  box-shadow: inset 0 0 3px rgba(51, 51, 51, 0.45);
  transition: background 450ms; }

[disabled].noUi-slider {
  opacity: 0.5; }

[disabled] .noUi-handle {
  cursor: not-allowed; }

.slider {
  background: #c8c8c8; }

.slider.noUi-connect {
  background-color: #9c27b0; }

.slider .noUi-handle {
  border-color: #9c27b0; }

.slider.slider-info .noUi-connect, .slider.slider-info.noUi-connect {
  background-color: #00bcd4; }

.slider.slider-info .noUi-handle {
  border-color: #00bcd4; }

.slider.slider-success .noUi-connect, .slider.slider-success.noUi-connect {
  background-color: #4caf50; }

.slider.slider-success .noUi-handle {
  border-color: #4caf50; }

.slider.slider-warning .noUi-connect, .slider.slider-warning.noUi-connect {
  background-color: #ff9800; }

.slider.slider-warning .noUi-handle {
  border-color: #ff9800; }

.slider.slider-danger .noUi-connect, .slider.slider-danger.noUi-connect {
  background-color: #f44336; }

.slider.slider-danger .noUi-handle {
  border-color: #f44336; }

.noUi-target {
  position: relative;
  direction: ltr; }

.noUi-tooltip {
  display: block;
  position: absolute;
  border-radius: 3px;
  color: #000;
  padding: 0px;
  text-align: center; }

.noUi-horizontal .noUi-tooltip {
  -webkit-transform: translate(-50%, 0);
  transform: translate(-50%, 0);
  left: 50%;
  bottom: 120%; }

.noUi-vertical .noUi-tooltip {
  -webkit-transform: translate(0, -50%);
  transform: translate(0, -50%);
  top: 50%;
  right: 120%; }

/*
Animate.css - http://daneden.me/animate
Licensed under the MIT license - http://opensource.org/licenses/MIT

Copyright (c) 2015 Daniel Eden
*/
.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both; }

.animated.infinite {
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite; }

.animated.hinge {
  -webkit-animation-duration: 2s;
  animation-duration: 2s; }

.animated.bounceIn,
.animated.bounceOut {
  -webkit-animation-duration: .75s;
  animation-duration: .75s; }

.animated.flipOutX,
.animated.flipOutY {
  -webkit-animation-duration: .75s;
  animation-duration: .75s; }

@-webkit-keyframes shake {
  from, to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); }
  10%, 30%, 50%, 70%, 90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0); }
  20%, 40%, 60%, 80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0); } }

@keyframes shake {
  from, to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); }
  10%, 30%, 50%, 70%, 90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0); }
  20%, 40%, 60%, 80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0); } }

.shake {
  -webkit-animation-name: shake;
  animation-name: shake; }

@-webkit-keyframes fadeInDown {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0); }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

@keyframes fadeInDown {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0); }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown; }

@-webkit-keyframes fadeOut {
  from {
    opacity: 1; }
  to {
    opacity: 0; } }

@keyframes fadeOut {
  from {
    opacity: 1; }
  to {
    opacity: 0; } }

.fadeOut {
  -webkit-animation-name: fadeOut;
  animation-name: fadeOut; }

@-webkit-keyframes fadeOutDown {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0); } }

@keyframes fadeOutDown {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0); } }

.fadeOutDown {
  -webkit-animation-name: fadeOutDown;
  animation-name: fadeOutDown; }

@-webkit-keyframes fadeOutUp {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0); } }

@keyframes fadeOutUp {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0); } }

.fadeOutUp {
  -webkit-animation-name: fadeOutUp;
  animation-name: fadeOutUp; }

.swal2-container, body.swal2-iosfix {
  position: fixed;
  left: 0;
  right: 0; }

body.swal2-shown {
  overflow-y: hidden; }

.swal2-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  top: 0;
  bottom: 0;
  padding: 10px;
  background-color: transparent;
  z-index: 1060; }

.swal2-container.swal2-fade {
  transition: background-color .1s; }

.swal2-container.swal2-shown {
  background-color: rgba(0, 0, 0, 0.4); }

.swal2-modal {
  background-color: #fff;
  font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;
  border-radius: 5px;
  box-sizing: border-box;
  text-align: center;
  margin: auto;
  overflow-x: hidden;
  overflow-y: auto;
  display: none;
  position: relative; }

.swal2-modal:focus {
  outline: 0; }

.swal2-modal.swal2-loading {
  overflow-y: hidden; }

.swal2-modal .swal2-title {
  color: #595959;
  font-size: 30px;
  text-align: center;
  font-weight: 600;
  text-transform: none;
  position: relative;
  margin: 0 0 .4em;
  padding: 0;
  display: block; }

.swal2-modal .swal2-spacer {
  height: 10px;
  color: transparent;
  border: 0; }

.swal2-modal .swal2-styled {
  border: 0;
  border-radius: 3px;
  box-shadow: none;
  color: #fff;
  cursor: pointer;
  font-size: 17px;
  font-weight: 500;
  margin: 0 5px;
  padding: 10px 32px; }

.swal2-modal .swal2-styled:not(.swal2-loading)[disabled] {
  opacity: .4;
  cursor: no-drop; }

.swal2-modal .swal2-styled.swal2-loading {
  box-sizing: border-box;
  border: 4px solid transparent;
  width: 40px;
  height: 40px;
  padding: 0;
  margin: -2px 30px;
  vertical-align: top;
  background-color: transparent !important;
  color: transparent;
  cursor: default;
  border-radius: 100%;
  -webkit-animation: rotate-loading 1.5s linear 0s infinite normal;
  animation: rotate-loading 1.5s linear 0s infinite normal;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none; }

.swal2-modal .swal2-styled + .swal2-styled {
  margin-top: 15px; }

.swal2-modal :not(.swal2-styled).swal2-loading::after {
  display: inline-block;
  content: '';
  margin-left: 5px;
  vertical-align: -1px;
  height: 6px;
  width: 6px;
  border: 3px solid #999;
  border-right-color: transparent;
  border-radius: 50%;
  -webkit-animation: rotate-loading 1.5s linear 0s infinite normal;
  animation: rotate-loading 1.5s linear 0s infinite normal; }

.swal2-modal .swal2-checkbox input, .swal2-modal .swal2-checkbox span, .swal2-modal .swal2-radio input, .swal2-modal .swal2-radio span {
  vertical-align: middle; }

.swal2-modal .swal2-image {
  margin: 20px auto;
  max-width: 100%; }

.swal2-modal .swal2-close {
  font-size: 36px;
  line-height: 36px;
  font-family: serif;
  position: absolute;
  top: 5px;
  right: 13px;
  cursor: pointer;
  color: #ccc;
  transition: color .1s ease; }

.swal2-modal .swal2-close:hover {
  color: #d55; }

.swal2-modal > .swal2-checkbox, .swal2-modal > .swal2-file, .swal2-modal > .swal2-input, .swal2-modal > .swal2-radio, .swal2-modal > .swal2-select, .swal2-modal > .swal2-textarea {
  display: none; }

.swal2-modal .swal2-content {
  font-size: 18px;
  text-align: center;
  font-weight: 300;
  position: relative;
  float: none;
  margin: 0;
  padding: 0;
  line-height: normal;
  color: #545454; }

.swal2-modal .swal2-checkbox, .swal2-modal .swal2-file, .swal2-modal .swal2-input, .swal2-modal .swal2-radio, .swal2-modal .swal2-select, .swal2-modal .swal2-textarea {
  margin: 20px auto; }

.swal2-modal .swal2-file, .swal2-modal .swal2-input, .swal2-modal .swal2-textarea {
  width: 100%;
  box-sizing: border-box;
  border-radius: 3px;
  border: 1px solid #d9d9d9;
  font-size: 18px;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.06);
  transition: border-color box-shadow .3s; }

.swal2-modal .swal2-file.swal2-inputerror, .swal2-modal .swal2-input.swal2-inputerror, .swal2-modal .swal2-textarea.swal2-inputerror {
  border-color: #f06e57 !important; }

.swal2-modal .swal2-file:focus, .swal2-modal .swal2-input:focus, .swal2-modal .swal2-textarea:focus {
  outline: 0;
  box-shadow: 0 0 3px #c4e6f5;
  border: 1px solid #b4dbed; }

.swal2-modal .swal2-file:focus::-webkit-input-placeholder, .swal2-modal .swal2-input:focus::-webkit-input-placeholder, .swal2-modal .swal2-textarea:focus::-webkit-input-placeholder {
  transition: opacity .3s .03s ease;
  opacity: .8; }

.swal2-modal .swal2-file:focus:-ms-input-placeholder, .swal2-modal .swal2-input:focus:-ms-input-placeholder, .swal2-modal .swal2-textarea:focus:-ms-input-placeholder {
  transition: opacity .3s .03s ease;
  opacity: .8; }

.swal2-modal .swal2-file:focus::placeholder, .swal2-modal .swal2-input:focus::placeholder, .swal2-modal .swal2-textarea:focus::placeholder {
  transition: opacity .3s .03s ease;
  opacity: .8; }

.swal2-modal .swal2-file::-webkit-input-placeholder, .swal2-modal .swal2-input::-webkit-input-placeholder, .swal2-modal .swal2-textarea::-webkit-input-placeholder {
  color: #e6e6e6; }

.swal2-modal .swal2-file:-ms-input-placeholder, .swal2-modal .swal2-input:-ms-input-placeholder, .swal2-modal .swal2-textarea:-ms-input-placeholder {
  color: #e6e6e6; }

.swal2-modal .swal2-file::placeholder, .swal2-modal .swal2-input::placeholder, .swal2-modal .swal2-textarea::placeholder {
  color: #e6e6e6; }

.swal2-modal .swal2-range input {
  float: left;
  width: 80%; }

.swal2-modal .swal2-range output {
  float: right;
  width: 20%;
  font-size: 20px;
  font-weight: 600;
  text-align: center; }

.swal2-modal .swal2-range input, .swal2-modal .swal2-range output {
  height: 43px;
  line-height: 43px;
  vertical-align: middle;
  margin: 20px auto;
  padding: 0; }

.swal2-modal .swal2-input {
  height: 43px;
  padding: 0 12px; }

.swal2-modal .swal2-input[type=number] {
  max-width: 150px; }

.swal2-modal .swal2-file {
  font-size: 20px; }

.swal2-modal .swal2-textarea {
  height: 108px;
  padding: 12px; }

.swal2-modal .swal2-select {
  color: #545454;
  font-size: inherit;
  padding: 5px 10px;
  min-width: 40%;
  max-width: 100%; }

.swal2-modal .swal2-radio {
  border: 0; }

.swal2-modal .swal2-radio label:not(:first-child) {
  margin-left: 20px; }

.swal2-modal .swal2-radio input {
  margin: 0 3px 0 0; }

.swal2-modal .swal2-checkbox {
  color: #545454; }

.swal2-modal .swal2-validationerror {
  background-color: #f0f0f0;
  margin: 0 -20px;
  overflow: hidden;
  padding: 10px;
  color: gray;
  font-size: 16px;
  font-weight: 300;
  display: none; }

.swal2-modal .swal2-validationerror::before {
  content: '!';
  display: inline-block;
  width: 24px;
  height: 24px;
  border-radius: 50%;
  background-color: #ea7d7d;
  color: #fff;
  line-height: 24px;
  text-align: center;
  margin-right: 10px; }

.swal2-icon.swal2-info, .swal2-icon.swal2-question, .swal2-icon.swal2-warning {
  font-size: 60px;
  line-height: 80px;
  text-align: center; }

@supports (-ms-accelerator: true) {
  .swal2-range input {
    width: 100% !important; }
  .swal2-range output {
    display: none; } }

@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
  .swal2-range input {
    width: 100% !important; }
  .swal2-range output {
    display: none; } }

.swal2-icon {
  width: 80px;
  height: 80px;
  border: 4px solid transparent;
  border-radius: 50%;
  margin: 20px auto 30px;
  padding: 0;
  position: relative;
  box-sizing: content-box;
  cursor: default;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none; }

.swal2-icon.swal2-error {
  border-color: #f27474; }

.swal2-icon.swal2-error .x-mark {
  position: relative;
  display: block; }

.swal2-icon.swal2-error .line {
  position: absolute;
  height: 5px;
  width: 47px;
  background-color: #f27474;
  display: block;
  top: 37px;
  border-radius: 2px; }

.swal2-icon.swal2-error .line.left {
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
  left: 17px; }

.swal2-icon.swal2-error .line.right {
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  right: 16px; }

.swal2-icon.swal2-warning {
  font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;
  color: #f8bb86;
  border-color: #facea8; }

.swal2-icon.swal2-info {
  font-family: 'Open Sans',sans-serif;
  color: #3fc3ee;
  border-color: #9de0f6; }

.swal2-icon.swal2-question {
  font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;
  color: #87adbd;
  border-color: #c9dae1; }

.swal2-icon.swal2-success {
  border-color: #a5dc86; }

.swal2-icon.swal2-success::after, .swal2-icon.swal2-success::before {
  content: '';
  position: absolute;
  width: 60px;
  height: 120px;
  background: #fff; }

.swal2-icon.swal2-success::before {
  border-radius: 120px 0 0 120px;
  top: -7px;
  left: -33px;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  -webkit-transform-origin: 60px 60px;
  transform-origin: 60px 60px; }

.swal2-icon.swal2-success::after {
  border-radius: 0 120px 120px 0;
  top: -11px;
  left: 30px;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  -webkit-transform-origin: 0 60px;
  transform-origin: 0 60px; }

.swal2-icon.swal2-success .placeholder {
  width: 80px;
  height: 80px;
  border: 4px solid rgba(165, 220, 134, 0.2);
  border-radius: 50%;
  box-sizing: content-box;
  position: absolute;
  left: -4px;
  top: -4px;
  z-index: 2; }

.swal2-icon.swal2-success .fix {
  width: 7px;
  height: 90px;
  background-color: #fff;
  position: absolute;
  left: 28px;
  top: 8px;
  z-index: 1;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg); }

.swal2-icon.swal2-success .line {
  height: 5px;
  background-color: #a5dc86;
  display: block;
  border-radius: 2px;
  position: absolute;
  z-index: 2; }

.swal2-icon.swal2-success .line.tip {
  width: 25px;
  left: 14px;
  top: 46px;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg); }

.swal2-icon.swal2-success .line.long {
  width: 47px;
  right: 8px;
  top: 38px;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg); }

.swal2-progresssteps {
  font-weight: 600;
  margin: 0 0 20px;
  padding: 0; }

.swal2-progresssteps li {
  display: inline-block;
  position: relative; }

.swal2-progresssteps .swal2-progresscircle {
  background: #3085d6;
  border-radius: 2em;
  color: #fff;
  height: 2em;
  line-height: 2em;
  text-align: center;
  width: 2em;
  z-index: 20; }

.swal2-progresssteps .swal2-progresscircle:first-child {
  margin-left: 0; }

.swal2-progresssteps .swal2-progresscircle:last-child {
  margin-right: 0; }

.swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep {
  background: #3085d6; }

.swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep ~ .swal2-progresscircle, .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep ~ .swal2-progressline {
  background: #add8e6; }

.swal2-progresssteps .swal2-progressline {
  background: #3085d6;
  height: .4em;
  margin: 0 -1px;
  z-index: 10; }

[class^=swal2] {
  -webkit-tap-highlight-color: transparent; }

@-webkit-keyframes showSweetAlert {
  0% {
    -webkit-transform: scale(0.7);
    transform: scale(0.7); }
  45% {
    -webkit-transform: scale(1.05);
    transform: scale(1.05); }
  80% {
    -webkit-transform: scale(0.95);
    transform: scale(0.95); }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1); } }

@keyframes showSweetAlert {
  0% {
    -webkit-transform: scale(0.7);
    transform: scale(0.7); }
  45% {
    -webkit-transform: scale(1.05);
    transform: scale(1.05); }
  80% {
    -webkit-transform: scale(0.95);
    transform: scale(0.95); }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1); } }

@-webkit-keyframes hideSweetAlert {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1; }
  100% {
    -webkit-transform: scale(0.5);
    transform: scale(0.5);
    opacity: 0; } }

@keyframes hideSweetAlert {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1; }
  100% {
    -webkit-transform: scale(0.5);
    transform: scale(0.5);
    opacity: 0; } }

.swal2-show {
  -webkit-animation: showSweetAlert .3s;
  animation: showSweetAlert .3s; }

.swal2-show.swal2-noanimation {
  -webkit-animation: none;
  animation: none; }

.swal2-hide {
  -webkit-animation: hideSweetAlert .15s forwards;
  animation: hideSweetAlert .15s forwards; }

.swal2-hide.swal2-noanimation {
  -webkit-animation: none;
  animation: none; }

@-webkit-keyframes animate-success-tip {
  0%, 54% {
    width: 0;
    left: 1px;
    top: 19px; }
  70% {
    width: 50px;
    left: -8px;
    top: 37px; }
  84% {
    width: 17px;
    left: 21px;
    top: 48px; }
  100% {
    width: 25px;
    left: 14px;
    top: 45px; } }

@keyframes animate-success-tip {
  0%, 54% {
    width: 0;
    left: 1px;
    top: 19px; }
  70% {
    width: 50px;
    left: -8px;
    top: 37px; }
  84% {
    width: 17px;
    left: 21px;
    top: 48px; }
  100% {
    width: 25px;
    left: 14px;
    top: 45px; } }

@-webkit-keyframes animate-success-long {
  0%, 65% {
    width: 0;
    right: 46px;
    top: 54px; }
  84% {
    width: 55px;
    right: 0;
    top: 35px; }
  100% {
    width: 47px;
    right: 8px;
    top: 38px; } }

@keyframes animate-success-long {
  0%, 65% {
    width: 0;
    right: 46px;
    top: 54px; }
  84% {
    width: 55px;
    right: 0;
    top: 35px; }
  100% {
    width: 47px;
    right: 8px;
    top: 38px; } }

@-webkit-keyframes rotatePlaceholder {
  0%, 5% {
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg); }
  100%, 12% {
    -webkit-transform: rotate(-405deg);
    transform: rotate(-405deg); } }

@keyframes rotatePlaceholder {
  0%, 5% {
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg); }
  100%, 12% {
    -webkit-transform: rotate(-405deg);
    transform: rotate(-405deg); } }

.animate-success-tip {
  -webkit-animation: animate-success-tip .75s;
  animation: animate-success-tip .75s; }

.animate-success-long {
  -webkit-animation: animate-success-long .75s;
  animation: animate-success-long .75s; }

.swal2-success.animate::after {
  -webkit-animation: rotatePlaceholder 4.25s ease-in;
  animation: rotatePlaceholder 4.25s ease-in; }

@-webkit-keyframes animate-error-icon {
  0% {
    -webkit-transform: rotateX(100deg);
    transform: rotateX(100deg);
    opacity: 0; }
  100% {
    -webkit-transform: rotateX(0);
    transform: rotateX(0);
    opacity: 1; } }

@keyframes animate-error-icon {
  0% {
    -webkit-transform: rotateX(100deg);
    transform: rotateX(100deg);
    opacity: 0; }
  100% {
    -webkit-transform: rotateX(0);
    transform: rotateX(0);
    opacity: 1; } }

.animate-error-icon {
  -webkit-animation: animate-error-icon .5s;
  animation: animate-error-icon .5s; }

@-webkit-keyframes animate-x-mark {
  0%, 50% {
    -webkit-transform: scale(0.4);
    transform: scale(0.4);
    margin-top: 26px;
    opacity: 0; }
  80% {
    -webkit-transform: scale(1.15);
    transform: scale(1.15);
    margin-top: -6px; }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
    margin-top: 0;
    opacity: 1; } }

@keyframes animate-x-mark {
  0%, 50% {
    -webkit-transform: scale(0.4);
    transform: scale(0.4);
    margin-top: 26px;
    opacity: 0; }
  80% {
    -webkit-transform: scale(1.15);
    transform: scale(1.15);
    margin-top: -6px; }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
    margin-top: 0;
    opacity: 1; } }

.animate-x-mark {
  -webkit-animation: animate-x-mark .5s;
  animation: animate-x-mark .5s; }

@-webkit-keyframes pulse-warning {
  0% {
    border-color: #f8d486; }
  100% {
    border-color: #f8bb86; } }

@keyframes pulse-warning {
  0% {
    border-color: #f8d486; }
  100% {
    border-color: #f8bb86; } }

.pulse-warning {
  -webkit-animation: pulse-warning .75s infinite alternate;
  animation: pulse-warning .75s infinite alternate; }

@-webkit-keyframes rotate-loading {
  0% {
    -webkit-transform: rotate(0);
    transform: rotate(0); }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

@keyframes rotate-loading {
  0% {
    -webkit-transform: rotate(0);
    transform: rotate(0); }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

table.dataTable {
  clear: both;
  margin-top: 6px !important;
  margin-bottom: 6px !important;
  max-width: none !important;
  border-collapse: separate !important; }

table.dataTable td,
table.dataTable th {
  box-sizing: content-box; }

table.dataTable td.dataTables_empty,
table.dataTable th.dataTables_empty {
  text-align: center; }

table.dataTable.nowrap th,
table.dataTable.nowrap td {
  white-space: nowrap; }

div.dataTables_wrapper div.dataTables_length label {
  font-weight: normal;
  text-align: left;
  white-space: nowrap; }

div.dataTables_wrapper div.dataTables_length select {
  width: 75px;
  display: inline-block; }

div.dataTables_wrapper div.dataTables_filter {
  text-align: right; }

div.dataTables_wrapper div.dataTables_filter label {
  font-weight: normal;
  white-space: nowrap;
  text-align: left; }

div.dataTables_wrapper div.dataTables_filter input {
  margin-left: 0.5em;
  display: inline-block;
  width: 100%; }

div.dataTables_wrapper div.dataTables_info {
  padding-top: 8px;
  white-space: nowrap; }

div.dataTables_wrapper div.dataTables_paginate {
  margin: 0;
  white-space: nowrap;
  text-align: right; }

div.dataTables_wrapper div.dataTables_paginate ul.pagination {
  margin: 2px 0;
  white-space: nowrap; }

div.dataTables_wrapper div.dataTables_processing {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 200px;
  margin-left: -100px;
  margin-top: -26px;
  text-align: center;
  padding: 1em 0; }

table.dataTable thead > tr > th.sorting_asc, table.dataTable thead > tr > th.sorting_desc, table.dataTable thead > tr > th.sorting,
table.dataTable thead > tr > td.sorting_asc,
table.dataTable thead > tr > td.sorting_desc,
table.dataTable thead > tr > td.sorting {
  padding-right: 30px; }

table.dataTable thead > tr > th:active,
table.dataTable thead > tr > td:active {
  outline: none; }

table.dataTable thead .sorting,
table.dataTable thead .sorting_asc,
table.dataTable thead .sorting_desc,
table.dataTable thead .sorting_asc_disabled,
table.dataTable thead .sorting_desc_disabled {
  cursor: pointer;
  position: relative; }

table.dataTable thead .sorting:after,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_desc_disabled:after {
  position: absolute;
  bottom: 8px;
  right: 8px;
  display: block;
  font-family: 'Glyphicons Halflings';
  opacity: 0.5; }

table.dataTable thead .sorting:after {
  opacity: 0.2;
  content: "\E150";
  /* sort */ }

table.dataTable thead .sorting_asc:after {
  content: "\E155";
  /* sort-by-attributes */ }

table.dataTable thead .sorting_desc:after {
  content: "\E156";
  /* sort-by-attributes-alt */ }

table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_desc_disabled:after {
  color: #eee; }

div.dataTables_scrollHead table.dataTable {
  margin-bottom: 0 !important; }

div.dataTables_scrollBody table {
  border-top: none;
  margin-top: 0 !important;
  margin-bottom: 0 !important; }

div.dataTables_scrollBody table thead .sorting:after,
div.dataTables_scrollBody table thead .sorting_asc:after,
div.dataTables_scrollBody table thead .sorting_desc:after {
  display: none; }

div.dataTables_scrollBody table tbody tr:first-child th,
div.dataTables_scrollBody table tbody tr:first-child td {
  border-top: none; }

div.dataTables_scrollFoot table {
  margin-top: 0 !important;
  border-top: none; }

@media screen and (max-width: 767px) {
  div.dataTables_wrapper div.dataTables_length,
  div.dataTables_wrapper div.dataTables_filter,
  div.dataTables_wrapper div.dataTables_info,
  div.dataTables_wrapper div.dataTables_paginate {
    text-align: center; } }

table.dataTable.table-condensed > thead > tr > th {
  padding-right: 20px; }

table.dataTable.table-condensed .sorting:after,
table.dataTable.table-condensed .sorting_asc:after,
table.dataTable.table-condensed .sorting_desc:after {
  top: 6px;
  right: 6px; }

table.table-bordered.dataTable th,
table.table-bordered.dataTable td {
  border-left-width: 0; }

table.table-bordered.dataTable th:last-child, table.table-bordered.dataTable th:last-child,
table.table-bordered.dataTable td:last-child,
table.table-bordered.dataTable td:last-child {
  border-right-width: 0; }

table.table-bordered.dataTable tbody th,
table.table-bordered.dataTable tbody td {
  border-bottom-width: 0; }

div.dataTables_scrollHead table.table-bordered {
  border-bottom-width: 0; }

div.table-responsive > div.dataTables_wrapper > div.row {
  margin: 0; }

table.dataTable .btn-simple.btn-icon {
  padding: 3px; }

table.dataTable thead .sorting:after,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_desc_disabled:after {
  position: relative;
  display: inline-block;
  bottom: 1px;
  right: -7px;
  font-family: 'FontAwesome';
  opacity: 0.8;
  font-size: 12px; }

table.dataTable thead .disabled-sorting.sorting:after,
table.dataTable thead .disabled-sorting.sorting_asc:after,
table.dataTable thead .disabled-sorting.sorting_desc:after,
table.dataTable thead .disabled-sorting.sorting_asc_disabled:after,
table.dataTable thead .disabled-sorting.sorting_desc_disabled:after {
  display: none; }

table.dataTable thead .sorting:after {
  opacity: 0.4;
  content: "\F0DC"; }

table.dataTable thead .sorting_asc:after {
  content: "\F0DE";
  top: 2px; }

table.dataTable thead .sorting_desc:after {
  content: "\F0DD";
  top: -3px; }

table.dataTable > thead > tr > th,
table.dataTable > tbody > tr > th,
table.dataTable > tfoot > tr > th,
table.dataTable > thead > tr > td,
table.dataTable > tbody > tr > td,
table.dataTable > tfoot > tr > td {
  padding: 5px !important;
  outline: 0; }

table.dataTable > thead > tr > th {
  border: none; }

.dataTables_paginate a {
  outline: 0; }

table.dataTable.dtr-inline.collapsed > tbody > tr > td.child,
table.dataTable.dtr-inline.collapsed > tbody > tr > th.child,
table.dataTable.dtr-inline.collapsed > tbody > tr > td.dataTables_empty {
  cursor: default !important; }

table.dataTable.dtr-inline.collapsed > tbody > tr > td.child:before,
table.dataTable.dtr-inline.collapsed > tbody > tr > th.child:before,
table.dataTable.dtr-inline.collapsed > tbody > tr > td.dataTables_empty:before {
  display: none !important; }

table.dataTable.dtr-inline.collapsed > tbody > tr > td:first-child,
table.dataTable.dtr-inline.collapsed > tbody > tr > th:first-child {
  position: relative;
  padding-left: 30px;
  cursor: pointer; }

table.dataTable.dtr-inline.collapsed > tbody > tr > td:first-child:before,
table.dataTable.dtr-inline.collapsed > tbody > tr > th:first-child:before {
  top: 50%;
  margin-top: -9px;
  left: 4px;
  height: 18px;
  width: 18px;
  display: block;
  position: absolute;
  color: #4caf50;
  border: 0px solid white;
  border-radius: 14px;
  box-shadow: 0 0 3px #444;
  box-sizing: content-box;
  text-align: center;
  font-family: 'Courier New', Courier, monospace;
  line-height: 18px;
  content: '+';
  background-color: #FFF; }

table.dataTable.dtr-inline.collapsed > tbody > tr.parent > td:first-child:before,
table.dataTable.dtr-inline.collapsed > tbody > tr.parent > th:first-child:before {
  content: '-';
  color: #f44336; }

table.dataTable.dtr-inline.collapsed > tbody > tr.child td:before {
  display: none; }

table.dataTable.dtr-inline.collapsed.compact > tbody > tr > td:first-child,
table.dataTable.dtr-inline.collapsed.compact > tbody > tr > th:first-child {
  padding-left: 27px; }

table.dataTable.dtr-inline.collapsed.compact > tbody > tr > td:first-child:before,
table.dataTable.dtr-inline.collapsed.compact > tbody > tr > th:first-child:before {
  top: 5px;
  left: 4px;
  height: 14px;
  width: 14px;
  border-radius: 14px;
  line-height: 14px;
  text-indent: 3px; }

table.dataTable.dtr-column > tbody > tr > td.control,
table.dataTable.dtr-column > tbody > tr > th.control {
  position: relative;
  cursor: pointer; }

table.dataTable.dtr-column > tbody > tr > td.control:before,
table.dataTable.dtr-column > tbody > tr > th.control:before {
  top: 50%;
  left: 50%;
  height: 16px;
  width: 16px;
  margin-top: -10px;
  margin-left: -10px;
  display: block;
  position: absolute;
  color: white;
  border: 2px solid white;
  border-radius: 14px;
  box-shadow: 0 0 3px #444;
  box-sizing: content-box;
  text-align: center;
  font-family: 'Courier New', Courier, monospace;
  line-height: 14px;
  content: '+';
  background-color: #31b131; }

table.dataTable.dtr-column > tbody > tr.parent td.control:before,
table.dataTable.dtr-column > tbody > tr.parent th.control:before {
  content: '-';
  background-color: #d33333; }

table.dataTable > tbody > tr.child {
  padding: 0.5em 1em; }

table.dataTable > tbody > tr.child:hover {
  background: transparent !important; }

table.dataTable > tbody > tr.child ul {
  display: inline-block;
  list-style-type: none;
  margin: 0;
  padding: 0; }

table.dataTable > tbody > tr.child ul li {
  border-bottom: 1px solid #efefef;
  padding: 0.5em 0; }

table.dataTable > tbody > tr.child ul li:first-child {
  padding-top: 0; }

table.dataTable > tbody > tr.child ul li:last-child {
  border-bottom: none; }

table.dataTable > tbody > tr.child span.dtr-title {
  display: inline-block;
  min-width: 75px;
  font-weight: bold; }

div.dtr-modal {
  position: fixed;
  box-sizing: border-box;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  z-index: 100;
  padding: 10em 1em; }
  div.dtr-modal div.dtr-modal-display {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    width: 50%;
    height: 50%;
    overflow: auto;
    margin: auto;
    z-index: 102;
    overflow: auto;
    background-color: #f5f5f7;
    border: 1px solid black;
    border-radius: 0.5em;
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.6); }
  div.dtr-modal div.dtr-modal-content {
    position: relative;
    padding: 1em; }
  div.dtr-modal div.dtr-modal-close {
    position: absolute;
    top: 6px;
    right: 6px;
    width: 22px;
    height: 22px;
    border: 1px solid #eaeaea;
    background-color: #f9f9f9;
    text-align: center;
    border-radius: 3px;
    cursor: pointer;
    z-index: 12; }
  div.dtr-modal div.dtr-modal-close:hover {
    background-color: #eaeaea; }
  div.dtr-modal div.dtr-modal-background {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 101;
    background: rgba(0, 0, 0, 0.6); }

.material-datatables .input-sm {
  height: 35px;
  padding: 0; }

@media screen and (max-width: 767px) {
  div.dtr-modal div.dtr-modal-display {
    width: 95%; }
  table.dataTable > tbody > tr > td:first-child {
    padding-left: 30px !important; }
  table > thead > tr > th {
    width: 60px !important; }
  div.dataTables_wrapper div.dataTables_length select,
  div.dataTables_wrapper div.dataTables_length label,
  div.dataTables_wrapper div.dataTables_length div.form-group,
  div.dataTables_wrapper div.dataTables_filter input,
  div.dataTables_wrapper div.dataTables_filter label {
    width: 100%; }
  div.dataTables_wrapper div.dataTables_filter input {
    margin-left: 0; } }

@media all and (min-width: 520px) and (max-width: 730px) {
  table.dataTable .btn-simple.btn-icon {
    display: block;
    margin: 0; } }

svg {
  -ms-touch-action: none;
      touch-action: none; }

.jvectormap-container {
  width: 100%;
  height: 100%;
  position: relative;
  overflow: hidden;
  -ms-touch-action: none;
      touch-action: none; }

.jvectormap-tip {
  position: absolute;
  display: none;
  color: #555555;
  line-height: 1.5em;
  background: #FFFFFF;
  border: none;
  border-radius: 30px;
  box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2);
  padding: 5px 10px;
  z-index: 1040; }

.jvectormap-zoomin, .jvectormap-zoomout, .jvectormap-goback {
  position: absolute;
  left: 10px;
  border-radius: 3px;
  background: #292929;
  padding: 3px;
  color: white;
  cursor: pointer;
  line-height: 10px;
  text-align: center;
  box-sizing: content-box; }

.jvectormap-zoomin, .jvectormap-zoomout {
  width: 10px;
  height: 10px; }

.jvectormap-zoomin {
  top: 10px; }

.jvectormap-zoomout {
  top: 30px; }

.jvectormap-goback {
  bottom: 10px;
  z-index: 1000;
  padding: 6px; }

.jvectormap-spinner {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  background: center no-repeat url(data:image/gif;base64,R0lGODlhIAAgAPMAAP///wAAAMbGxoSEhLa2tpqamjY2NlZWVtjY2OTk5Ly8vB4eHgQEBAAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAIAAgAAAE5xDISWlhperN52JLhSSdRgwVo1ICQZRUsiwHpTJT4iowNS8vyW2icCF6k8HMMBkCEDskxTBDAZwuAkkqIfxIQyhBQBFvAQSDITM5VDW6XNE4KagNh6Bgwe60smQUB3d4Rz1ZBApnFASDd0hihh12BkE9kjAJVlycXIg7CQIFA6SlnJ87paqbSKiKoqusnbMdmDC2tXQlkUhziYtyWTxIfy6BE8WJt5YJvpJivxNaGmLHT0VnOgSYf0dZXS7APdpB309RnHOG5gDqXGLDaC457D1zZ/V/nmOM82XiHRLYKhKP1oZmADdEAAAh+QQJCgAAACwAAAAAIAAgAAAE6hDISWlZpOrNp1lGNRSdRpDUolIGw5RUYhhHukqFu8DsrEyqnWThGvAmhVlteBvojpTDDBUEIFwMFBRAmBkSgOrBFZogCASwBDEY/CZSg7GSE0gSCjQBMVG023xWBhklAnoEdhQEfyNqMIcKjhRsjEdnezB+A4k8gTwJhFuiW4dokXiloUepBAp5qaKpp6+Ho7aWW54wl7obvEe0kRuoplCGepwSx2jJvqHEmGt6whJpGpfJCHmOoNHKaHx61WiSR92E4lbFoq+B6QDtuetcaBPnW6+O7wDHpIiK9SaVK5GgV543tzjgGcghAgAh+QQJCgAAACwAAAAAIAAgAAAE7hDISSkxpOrN5zFHNWRdhSiVoVLHspRUMoyUakyEe8PTPCATW9A14E0UvuAKMNAZKYUZCiBMuBakSQKG8G2FzUWox2AUtAQFcBKlVQoLgQReZhQlCIJesQXI5B0CBnUMOxMCenoCfTCEWBsJColTMANldx15BGs8B5wlCZ9Po6OJkwmRpnqkqnuSrayqfKmqpLajoiW5HJq7FL1Gr2mMMcKUMIiJgIemy7xZtJsTmsM4xHiKv5KMCXqfyUCJEonXPN2rAOIAmsfB3uPoAK++G+w48edZPK+M6hLJpQg484enXIdQFSS1u6UhksENEQAAIfkECQoAAAAsAAAAACAAIAAABOcQyEmpGKLqzWcZRVUQnZYg1aBSh2GUVEIQ2aQOE+G+cD4ntpWkZQj1JIiZIogDFFyHI0UxQwFugMSOFIPJftfVAEoZLBbcLEFhlQiqGp1Vd140AUklUN3eCA51C1EWMzMCezCBBmkxVIVHBWd3HHl9JQOIJSdSnJ0TDKChCwUJjoWMPaGqDKannasMo6WnM562R5YluZRwur0wpgqZE7NKUm+FNRPIhjBJxKZteWuIBMN4zRMIVIhffcgojwCF117i4nlLnY5ztRLsnOk+aV+oJY7V7m76PdkS4trKcdg0Zc0tTcKkRAAAIfkECQoAAAAsAAAAACAAIAAABO4QyEkpKqjqzScpRaVkXZWQEximw1BSCUEIlDohrft6cpKCk5xid5MNJTaAIkekKGQkWyKHkvhKsR7ARmitkAYDYRIbUQRQjWBwJRzChi9CRlBcY1UN4g0/VNB0AlcvcAYHRyZPdEQFYV8ccwR5HWxEJ02YmRMLnJ1xCYp0Y5idpQuhopmmC2KgojKasUQDk5BNAwwMOh2RtRq5uQuPZKGIJQIGwAwGf6I0JXMpC8C7kXWDBINFMxS4DKMAWVWAGYsAdNqW5uaRxkSKJOZKaU3tPOBZ4DuK2LATgJhkPJMgTwKCdFjyPHEnKxFCDhEAACH5BAkKAAAALAAAAAAgACAAAATzEMhJaVKp6s2nIkolIJ2WkBShpkVRWqqQrhLSEu9MZJKK9y1ZrqYK9WiClmvoUaF8gIQSNeF1Er4MNFn4SRSDARWroAIETg1iVwuHjYB1kYc1mwruwXKC9gmsJXliGxc+XiUCby9ydh1sOSdMkpMTBpaXBzsfhoc5l58Gm5yToAaZhaOUqjkDgCWNHAULCwOLaTmzswadEqggQwgHuQsHIoZCHQMMQgQGubVEcxOPFAcMDAYUA85eWARmfSRQCdcMe0zeP1AAygwLlJtPNAAL19DARdPzBOWSm1brJBi45soRAWQAAkrQIykShQ9wVhHCwCQCACH5BAkKAAAALAAAAAAgACAAAATrEMhJaVKp6s2nIkqFZF2VIBWhUsJaTokqUCoBq+E71SRQeyqUToLA7VxF0JDyIQh/MVVPMt1ECZlfcjZJ9mIKoaTl1MRIl5o4CUKXOwmyrCInCKqcWtvadL2SYhyASyNDJ0uIiRMDjI0Fd30/iI2UA5GSS5UDj2l6NoqgOgN4gksEBgYFf0FDqKgHnyZ9OX8HrgYHdHpcHQULXAS2qKpENRg7eAMLC7kTBaixUYFkKAzWAAnLC7FLVxLWDBLKCwaKTULgEwbLA4hJtOkSBNqITT3xEgfLpBtzE/jiuL04RGEBgwWhShRgQExHBAAh+QQJCgAAACwAAAAAIAAgAAAE7xDISWlSqerNpyJKhWRdlSAVoVLCWk6JKlAqAavhO9UkUHsqlE6CwO1cRdCQ8iEIfzFVTzLdRAmZX3I2SfZiCqGk5dTESJeaOAlClzsJsqwiJwiqnFrb2nS9kmIcgEsjQydLiIlHehhpejaIjzh9eomSjZR+ipslWIRLAgMDOR2DOqKogTB9pCUJBagDBXR6XB0EBkIIsaRsGGMMAxoDBgYHTKJiUYEGDAzHC9EACcUGkIgFzgwZ0QsSBcXHiQvOwgDdEwfFs0sDzt4S6BK4xYjkDOzn0unFeBzOBijIm1Dgmg5YFQwsCMjp1oJ8LyIAACH5BAkKAAAALAAAAAAgACAAAATwEMhJaVKp6s2nIkqFZF2VIBWhUsJaTokqUCoBq+E71SRQeyqUToLA7VxF0JDyIQh/MVVPMt1ECZlfcjZJ9mIKoaTl1MRIl5o4CUKXOwmyrCInCKqcWtvadL2SYhyASyNDJ0uIiUd6GGl6NoiPOH16iZKNlH6KmyWFOggHhEEvAwwMA0N9GBsEC6amhnVcEwavDAazGwIDaH1ipaYLBUTCGgQDA8NdHz0FpqgTBwsLqAbWAAnIA4FWKdMLGdYGEgraigbT0OITBcg5QwPT4xLrROZL6AuQAPUS7bxLpoWidY0JtxLHKhwwMJBTHgPKdEQAACH5BAkKAAAALAAAAAAgACAAAATrEMhJaVKp6s2nIkqFZF2VIBWhUsJaTokqUCoBq+E71SRQeyqUToLA7VxF0JDyIQh/MVVPMt1ECZlfcjZJ9mIKoaTl1MRIl5o4CUKXOwmyrCInCKqcWtvadL2SYhyASyNDJ0uIiUd6GAULDJCRiXo1CpGXDJOUjY+Yip9DhToJA4RBLwMLCwVDfRgbBAaqqoZ1XBMHswsHtxtFaH1iqaoGNgAIxRpbFAgfPQSqpbgGBqUD1wBXeCYp1AYZ19JJOYgH1KwA4UBvQwXUBxPqVD9L3sbp2BNk2xvvFPJd+MFCN6HAAIKgNggY0KtEBAAh+QQJCgAAACwAAAAAIAAgAAAE6BDISWlSqerNpyJKhWRdlSAVoVLCWk6JKlAqAavhO9UkUHsqlE6CwO1cRdCQ8iEIfzFVTzLdRAmZX3I2SfYIDMaAFdTESJeaEDAIMxYFqrOUaNW4E4ObYcCXaiBVEgULe0NJaxxtYksjh2NLkZISgDgJhHthkpU4mW6blRiYmZOlh4JWkDqILwUGBnE6TYEbCgevr0N1gH4At7gHiRpFaLNrrq8HNgAJA70AWxQIH1+vsYMDAzZQPC9VCNkDWUhGkuE5PxJNwiUK4UfLzOlD4WvzAHaoG9nxPi5d+jYUqfAhhykOFwJWiAAAIfkECQoAAAAsAAAAACAAIAAABPAQyElpUqnqzaciSoVkXVUMFaFSwlpOCcMYlErAavhOMnNLNo8KsZsMZItJEIDIFSkLGQoQTNhIsFehRww2CQLKF0tYGKYSg+ygsZIuNqJksKgbfgIGepNo2cIUB3V1B3IvNiBYNQaDSTtfhhx0CwVPI0UJe0+bm4g5VgcGoqOcnjmjqDSdnhgEoamcsZuXO1aWQy8KAwOAuTYYGwi7w5h+Kr0SJ8MFihpNbx+4Erq7BYBuzsdiH1jCAzoSfl0rVirNbRXlBBlLX+BP0XJLAPGzTkAuAOqb0WT5AH7OcdCm5B8TgRwSRKIHQtaLCwg1RAAAOwAAAAAAAAAAAA==); }

.jvectormap-legend-title {
  font-weight: bold;
  font-size: 14px;
  text-align: center; }

.jvectormap-legend-cnt {
  position: absolute; }

.jvectormap-legend-cnt-h {
  bottom: 0;
  right: 0; }

.jvectormap-legend-cnt-v {
  top: 0;
  right: 0; }

.jvectormap-legend {
  background: black;
  color: white;
  border-radius: 3px; }

.jvectormap-legend-cnt-h .jvectormap-legend {
  float: left;
  margin: 0 10px 10px 0;
  padding: 3px 3px 1px 3px; }

.jvectormap-legend-cnt-h .jvectormap-legend .jvectormap-legend-tick {
  float: left; }

.jvectormap-legend-cnt-v .jvectormap-legend {
  margin: 10px 10px 0 0;
  padding: 3px; }

.jvectormap-legend-cnt-h .jvectormap-legend-tick {
  width: 40px; }

.jvectormap-legend-cnt-h .jvectormap-legend-tick-sample {
  height: 15px; }

.jvectormap-legend-cnt-v .jvectormap-legend-tick-sample {
  height: 20px;
  width: 20px;
  display: inline-block;
  vertical-align: middle; }

.jvectormap-legend-tick-text {
  font-size: 12px; }

.jvectormap-legend-cnt-h .jvectormap-legend-tick-text {
  text-align: center; }

.jvectormap-legend-cnt-v .jvectormap-legend-tick-text {
  display: inline-block;
  vertical-align: middle;
  line-height: 20px;
  padding-left: 3px; }

/*!
 * Datetimepicker for Bootstrap 3
 * ! version : 4.7.14
 * https://github.com/Eonasdan/bootstrap-datetimepicker/
 */
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0; }

.cdk-overlay-container {
  position: fixed;
  z-index: 1031; }

.cdk-overlay-container, .cdk-global-overlay-wrapper {
  pointer-events: none;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%; }

.cdk-overlay-backdrop.cdk-overlay-backdrop-showing {
  opacity: 0.48; }

.cdk-overlay-backdrop {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1031;
  pointer-events: auto;
  -webkit-tap-highlight-color: transparent;
  transition: opacity 400ms cubic-bezier(0.25, 0.8, 0.25, 1);
  opacity: 0; }

.cdk-overlay-pane {
  position: absolute;
  pointer-events: auto;
  box-sizing: border-box;
  z-index: 1031; }

.mat-datepicker-content {
  background-color: white;
  color: rgba(0, 0, 0, 0.87); }

.cdk-visually-hidden {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  text-transform: none;
  width: 1px; }

.mat-calendar {
  font-family: Roboto, "Helvetica Neue", sans-serif; }

.mat-calendar-period-button {
  min-width: 0; }

.mat-calendar-next-button, .mat-calendar-previous-button {
  position: relative; }

.mat-ripple {
  overflow: hidden; }

.mat-button, .mat-icon-button {
  background: transparent; }

.mat-calendar-table-header {
  color: rgba(0, 0, 0, 0.38); }

.mat-calendar-table-header th {
  font-size: 11px;
  font-weight: 400; }

.mat-calendar-body {
  font-size: 13px; }

.mat-calendar-body-label {
  color: rgba(0, 0, 0, 0.54); }

.mat-calendar-body-label, .mat-calendar-period-button {
  font-size: 14px;
  font-weight: 500; }

.mat-calendar-body-cell-content {
  color: rgba(0, 0, 0, 0.87);
  border-color: transparent; }

.mat-calendar-body-today:not(.mat-calendar-body-selected) {
  border-color: rgba(0, 0, 0, 0.38); }

.mat-calendar-body-selected, .mat-calendar-body-selected:hover {
  background-color: #9c27b0;
  color: #FFFFFF;
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(156, 39, 176, 0.4); }

.cdk-global-overlay-wrapper {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  position: absolute;
  z-index: 1031; }

.cdk-overlay-dark-backdrop {
  background: rgba(0, 0, 0, 0.6); }

.mat-dialog-container {
  background: white;
  border-radius: 2px; }

.mat-dialog-container {
  background: white;
  color: rgba(0, 0, 0, 0.87); }

.mat-input-placeholder-wrapper {
  top: -0.84375em;
  padding-top: 0.84375em; }

.mat-input-placeholder {
  color: rgba(0, 0, 0, 0.38); }

.mat-input-placeholder.mat-empty {
  top: 1.28125em; }

.mat-input-placeholder {
  top: 1em; }

.mat-input-infix {
  padding: 0.4375em 0;
  border-top: 0.84375em solid transparent; }

.mat-input-wrapper {
  padding-bottom: 1.296875em; }

.mat-input-underline {
  background-color: rgba(0, 0, 0, 0.12); }

.mat-input-underline {
  bottom: 1.296875em; }

.mat-input-subscript-wrapper {
  font-size: 75%;
  margin-top: 0.60416667em;
  top: calc(100% - 1.72916667em); }

.mat-input-ripple {
  background-color: #9c27b0; }

.mat-focused .mat-input-placeholder {
  color: #9c27b0; }

.mat-input-element:disabled {
  color: grey; }

.mat-calendar-body-cell-content:hover {
  background: #eeeeee; }

.mat-input-placeholder.mat-float:not(.mat-empty), .mat-focused .mat-input-placeholder.mat-float {
  -webkit-transform: translateY(-0.75em) scale(0.75) perspective(100px) translateZ(0.001px);
          transform: translateY(-0.75em) scale(0.75) perspective(100px) translateZ(0.001px);
  -ms-transform: translateY(-0.75em) scale(0.75);
  width: 133.33333333%; }

.input-group.date .input-group-addon {
  cursor: pointer; }

.table-condensed > tbody > tr > td,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > td,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > thead > tr > th {
  padding: 1px;
  text-align: center; }

.datepicker__input[_ngcontent-c4] {
  border: none !important; }

.datepicker[_ngcontent-c4] {
  width: 100%; }

.datepicker__calendar[_ngcontent-c4] {
  top: 2.1em !important;
  left: -45px !important; }

/*!
 * FullCalendar v3.0.1 Stylesheet
 * Docs & License: http://fullcalendar.io/
 * (c) 2016 Adam Shaw
 */
.fc {
  direction: ltr;
  text-align: left; }

.fc-rtl {
  text-align: right; }

body .fc {
  /* extra precedence to overcome jqui */
  font-size: 1em; }

/* Colors
--------------------------------------------------------------------------------------------------*/
.fc-unthemed th,
.fc-unthemed td,
.fc-unthemed thead,
.fc-unthemed tbody,
.fc-unthemed .fc-divider,
.fc-unthemed .fc-row,
.fc-unthemed .fc-content,
.fc-unthemed .fc-popover,
.fc-unthemed .fc-list-view,
.fc-unthemed .fc-list-heading td {
  border-color: #ddd; }

.fc-unthemed .fc-popover {
  background-color: #FFFFFF; }

.fc-unthemed .fc-divider,
.fc-unthemed .fc-popover .fc-header,
.fc-unthemed .fc-list-heading td {
  background: #999999; }

.fc-unthemed .fc-popover .fc-header .fc-close {
  color: #999999; }

.fc-unthemed .fc-today {
  background: #f5f5f5; }

.fc-highlight {
  /* when user is selecting cells */
  background: #bce8f1;
  opacity: .3; }

.fc-bgevent {
  /* default look for background events */
  background: #8fdf82;
  opacity: .3; }

.fc-nonbusiness {
  /* default look for non-business-hours areas */
  /* will inherit .fc-bgevent's styles */
  background: #d7d7d7; }

/* Icons (inline elements with styled text that mock arrow icons)
--------------------------------------------------------------------------------------------------*/
.fc-icon {
  display: inline-block;
  height: 1em;
  line-height: 1em;
  font-size: 1em;
  text-align: center;
  overflow: hidden;
  font-family: "Courier New", Courier, monospace;
  /* don't allow browser text-selection */
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none; }

/*
Acceptable font-family overrides for individual icons:
	"Arial", sans-serif
	"Times New Roman", serif

NOTE: use percentage font sizes or else old IE chokes
*/
.fc-icon:after {
  position: relative; }

.fc-icon-left-single-arrow:after {
  content: "\2039";
  font-weight: bold;
  font-size: 200%;
  top: -7%; }

.fc-icon-right-single-arrow:after {
  content: "\203A";
  font-weight: bold;
  font-size: 200%;
  top: -7%; }

.fc-icon-left-double-arrow:after {
  content: "\AB";
  font-size: 160%;
  top: -7%; }

.fc-icon-right-double-arrow:after {
  content: "\BB";
  font-size: 160%;
  top: -7%; }

.fc-icon-left-triangle:after {
  content: "\25C4";
  font-size: 125%;
  top: 3%; }

.fc-icon-right-triangle:after {
  content: "\25BA";
  font-size: 125%;
  top: 3%; }

.fc-icon-down-triangle:after {
  content: "\25BC";
  font-size: 125%;
  top: 2%; }

.fc-icon-x:after {
  content: "\D7";
  font-size: 200%;
  top: 6%; }

/* Buttons (styled <button> tags, normalized to work cross-browser)
--------------------------------------------------------------------------------------------------*/
.fc button {
  border: none;
  border-radius: 30px;
  position: relative;
  padding: 6px 12px;
  font-weight: 400;
  letter-spacing: 0;
  will-change: box-shadow, transform;
  transition: box-shadow 0.2s cubic-bezier(0.4, 0, 1, 1), background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1); }
  .fc button::-moz-focus-inner {
    border: 0; }
  .fc button, .fc button.btn-primary {
    box-shadow: 0 2px 2px 0 rgba(156, 39, 176, 0.14), 0 3px 1px -2px rgba(156, 39, 176, 0.2), 0 1px 5px 0 rgba(156, 39, 176, 0.12); }
    .fc button, .fc button:hover, .fc button:focus, .fc button:active, .fc button.active, .fc button:active:focus, .fc button:active:hover, .fc button.active:focus, .fc button.active:hover,
    .open > .fc button.dropdown-toggle,
    .open > .fc button.dropdown-toggle:focus,
    .open > .fc button.dropdown-toggle:hover, .fc button.btn-primary, .fc button.btn-primary:hover, .fc button.btn-primary:focus, .fc button.btn-primary:active, .fc button.btn-primary.active, .fc button.btn-primary:active:focus, .fc button.btn-primary:active:hover, .fc button.btn-primary.active:focus, .fc button.btn-primary.active:hover,
    .open > .fc button.btn-primary.dropdown-toggle,
    .open > .fc button.btn-primary.dropdown-toggle:focus,
    .open > .fc button.btn-primary.dropdown-toggle:hover {
      background-color: #9c27b0;
      color: #FFFFFF; }
    .fc button:focus, .fc button:active, .fc button:hover, .fc button.btn-primary:focus, .fc button.btn-primary:active, .fc button.btn-primary:hover {
      box-shadow: 0 14px 26px -12px rgba(156, 39, 176, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(156, 39, 176, 0.2); }
    .fc button.disabled, .fc button.disabled:hover, .fc button.disabled:focus, .fc button.disabled.focus, .fc button.disabled:active, .fc button.disabled.active, .fc button:disabled, .fc button:disabled:hover, .fc button:disabled:focus, .fc button:disabled.focus, .fc button:disabled:active, .fc button:disabled.active, .fc button[disabled], .fc button[disabled]:hover, .fc button[disabled]:focus, .fc button[disabled].focus, .fc button[disabled]:active, .fc button[disabled].active,
    fieldset[disabled] .fc button,
    fieldset[disabled] .fc button:hover,
    fieldset[disabled] .fc button:focus,
    fieldset[disabled] .fc button.focus,
    fieldset[disabled] .fc button:active,
    fieldset[disabled] .fc button.active, .fc button.btn-primary.disabled, .fc button.btn-primary.disabled:hover, .fc button.btn-primary.disabled:focus, .fc button.btn-primary.disabled.focus, .fc button.btn-primary.disabled:active, .fc button.btn-primary.disabled.active, .fc button.btn-primary:disabled, .fc button.btn-primary:disabled:hover, .fc button.btn-primary:disabled:focus, .fc button.btn-primary:disabled.focus, .fc button.btn-primary:disabled:active, .fc button.btn-primary:disabled.active, .fc button.btn-primary[disabled], .fc button.btn-primary[disabled]:hover, .fc button.btn-primary[disabled]:focus, .fc button.btn-primary[disabled].focus, .fc button.btn-primary[disabled]:active, .fc button.btn-primary[disabled].active,
    fieldset[disabled] .fc button.btn-primary,
    fieldset[disabled] .fc button.btn-primary:hover,
    fieldset[disabled] .fc button.btn-primary:focus,
    fieldset[disabled] .fc button.btn-primary.focus,
    fieldset[disabled] .fc button.btn-primary:active,
    fieldset[disabled] .fc button.btn-primary.active {
      box-shadow: none; }
    .fc button.btn-simple, .fc button.btn-primary.btn-simple {
      background-color: transparent;
      color: #9c27b0;
      box-shadow: none; }
      .fc button.btn-simple:hover, .fc button.btn-simple:focus, .fc button.btn-simple:active, .fc button.btn-primary.btn-simple:hover, .fc button.btn-primary.btn-simple:focus, .fc button.btn-primary.btn-simple:active {
        background-color: transparent;
        color: #9c27b0; }

.fc button[disabled],
.fc button[disabled]:focus,
.fc button[disabled]:hover {
  cursor: default;
  background-color: #999999;
  border-color: #999999;
  box-shadow: 0 2px 2px 0 rgba(153, 153, 153, 0.14), 0 3px 1px -2px rgba(153, 153, 153, 0.2), 0 1px 5px 0 rgba(153, 153, 153, 0.12); }

.fc-state-default {
  /* non-theme */
  border: 1px solid; }

/*.fc-state-default.fc-corner-left { non-theme
	border-top-left-radius: 4px;
	border-bottom-left-radius: 4px;
}

.fc-state-default.fc-corner-right { /* non-theme
	border-top-right-radius: 4px;
	border-bottom-right-radius: 4px;
}*/
/* icons in buttons */
.fc button .fc-icon {
  /* non-theme */
  position: relative;
  top: -0.05em;
  /* seems to be a good adjustment across browsers */
  margin: 0 .2em;
  vertical-align: middle; }

/*
  button states
  borrowed from twitter bootstrap (http://twitter.github.com/bootstrap/)
*/
.fc-state-hover,
.fc-state-down,
.fc-state-active,
.fc-state-disabled {
  color: #333333;
  background-color: #e6e6e6; }

.fc-state-hover {
  color: #333333;
  text-decoration: none;
  background-position: 0 -15px;
  transition: background-position 0.1s linear; }

.fc-state-down,
.fc-state-active {
  background-color: #cccccc;
  background-image: none;
  box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05); }

.fc-state-disabled {
  cursor: default;
  background-image: none;
  opacity: 0.65;
  box-shadow: none; }

/* Buttons Groups
--------------------------------------------------------------------------------------------------*/
.fc-button-group {
  display: inline-block; }

/*
every button that is not first in a button group should scootch over one pixel and cover the
previous button's border...
*/
.fc .fc-button-group > * {
  /* extra precedence b/c buttons have margin set to zero */
  float: left;
  margin: 0 0 0 2px; }

.fc .fc-button-group > :first-child {
  /* same */
  margin-left: 0; }

/* Popover
--------------------------------------------------------------------------------------------------*/
.fc-popover {
  position: absolute;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15); }

.fc-popover .fc-header {
  /* TODO: be more consistent with fc-head/fc-body */
  padding: 2px 4px; }

.fc-popover .fc-header .fc-title {
  margin: 0 2px; }

.fc-popover .fc-header .fc-close {
  cursor: pointer; }

.fc-ltr .fc-popover .fc-header .fc-title,
.fc-rtl .fc-popover .fc-header .fc-close {
  float: left; }

.fc-rtl .fc-popover .fc-header .fc-title,
.fc-ltr .fc-popover .fc-header .fc-close {
  float: right; }

/* unthemed */
.fc-unthemed .fc-popover {
  border-width: 1px;
  border-style: solid; }

.fc-unthemed .fc-popover .fc-header .fc-close {
  font-size: .9em;
  margin-top: 2px; }

/* jqui themed */
.fc-popover > .ui-widget-header + .ui-widget-content {
  border-top: 0;
  /* where they meet, let the header have the border */ }

/* Misc Reusable Components
--------------------------------------------------------------------------------------------------*/
.fc-divider {
  border-style: solid;
  border-width: 1px; }

hr.fc-divider {
  height: 0;
  margin: 0;
  padding: 0 0 2px;
  /* height is unreliable across browsers, so use padding */
  border-width: 1px 0; }

.fc-clear {
  clear: both; }

.fc-bg,
.fc-bgevent-skeleton,
.fc-highlight-skeleton,
.fc-helper-skeleton {
  /* these element should always cling to top-left/right corners */
  position: absolute;
  top: 0;
  left: 0;
  right: 0; }

.fc-bg {
  bottom: 0;
  /* strech bg to bottom edge */ }

.fc-bg table {
  height: 100%;
  /* strech bg to bottom edge */ }

/* Tables
--------------------------------------------------------------------------------------------------*/
.fc table {
  width: 100%;
  box-sizing: border-box;
  /* fix scrollbar issue in firefox */
  table-layout: fixed;
  border-collapse: collapse;
  border-spacing: 0;
  font-size: 1em;
  /* normalize cross-browser */ }

.fc th {
  text-align: center; }

.fc th,
.fc td {
  border-style: solid;
  border-width: 1px;
  padding: 0;
  vertical-align: top; }

.fc td.fc-today {
  border-style: double;
  /* overcome neighboring borders */ }

/* Internal Nav Links
--------------------------------------------------------------------------------------------------*/
a[data-goto] {
  cursor: pointer; }

a[data-goto]:hover {
  text-decoration: underline; }

/* Fake Table Rows
--------------------------------------------------------------------------------------------------*/
.fc .fc-row {
  /* extra precedence to overcome themes w/ .ui-widget-content forcing a 1px border */
  /* no visible border by default. but make available if need be (scrollbar width compensation) */
  border-style: solid;
  border-width: 0; }

.fc-row table {
  /* don't put left/right border on anything within a fake row.
	   the outer tbody will worry about this */
  border-left: 0 hidden transparent;
  border-right: 0 hidden transparent;
  /* no bottom borders on rows */
  border-bottom: 0 hidden transparent; }

.fc-row:first-child table {
  border-top: 0 hidden transparent;
  /* no top border on first row */ }

/* Day Row (used within the header and the DayGrid)
--------------------------------------------------------------------------------------------------*/
.fc-row {
  position: relative; }

.fc-row .fc-bg {
  z-index: 1; }

/* highlighting cells & background event skeleton */
.fc-row .fc-bgevent-skeleton,
.fc-row .fc-highlight-skeleton {
  bottom: 0;
  /* stretch skeleton to bottom of row */ }

.fc-row .fc-bgevent-skeleton table,
.fc-row .fc-highlight-skeleton table {
  height: 100%;
  /* stretch skeleton to bottom of row */ }

.fc-row .fc-highlight-skeleton td,
.fc-row .fc-bgevent-skeleton td {
  border-color: transparent; }

.fc-row .fc-bgevent-skeleton {
  z-index: 2; }

.fc-row .fc-highlight-skeleton {
  z-index: 3; }

/*
row content (which contains day/week numbers and events) as well as "helper" (which contains
temporary rendered events).
*/
.fc-row .fc-content-skeleton {
  position: relative;
  z-index: 4;
  padding-bottom: 2px;
  /* matches the space above the events */ }

.fc-row .fc-helper-skeleton {
  z-index: 5; }

.fc-row .fc-content-skeleton td,
.fc-row .fc-helper-skeleton td {
  /* see-through to the background below */
  background: none;
  /* in case <td>s are globally styled */
  border-color: transparent;
  /* don't put a border between events and/or the day number */
  border-bottom: 0; }

.fc-row .fc-content-skeleton tbody td,
.fc-row .fc-helper-skeleton tbody td {
  /* don't put a border between event cells */
  border-top: 0; }

/* Scrolling Container
--------------------------------------------------------------------------------------------------*/
.fc-scroller {
  -webkit-overflow-scrolling: touch; }

/* TODO: move to agenda/basic */
.fc-scroller > .fc-day-grid,
.fc-scroller > .fc-time-grid {
  position: relative;
  /* re-scope all positions */
  width: 100%;
  /* hack to force re-sizing this inner element when scrollbars appear/disappear */ }

/* Global Event Styles
--------------------------------------------------------------------------------------------------*/
.fc-event {
  position: relative;
  /* for resize handle and other inner positioning */
  display: block;
  /* make the <a> tag block */
  font-size: .85em;
  line-height: 1.3;
  border-radius: 2px;
  background-color: #4caf50;
  /* default BACKGROUND color */
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(76, 175, 80, 0.4);
  font-weight: normal;
  /* undo jqui's ui-widget-header bold */ }
  .fc-event.event-azure {
    background-color: #00bcd4;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(0, 188, 212, 0.4); }
  .fc-event.event-green {
    background-color: #4caf50;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(76, 175, 80, 0.4); }
  .fc-event.event-orange {
    background-color: #ff9800;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 152, 0, 0.4); }
  .fc-event.event-red {
    background-color: #f44336;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(244, 67, 54, 0.4); }
  .fc-event.event-rose {
    background-color: #e91e63;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(233, 30, 99, 0.4); }
  .fc-event.event-default {
    background-color: #999999;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(153, 153, 153, 0.4); }

.fc-event-dot {
  background-color: #3a87ad;
  /* default BACKGROUND color */ }

/* overpower some of bootstrap's and jqui's styles on <a> tags */
.fc-event,
.fc-event:hover,
.ui-widget .fc-event {
  color: #FFFFFF;
  /* default TEXT color */
  text-decoration: none;
  /* if <a> has an href */ }

.fc-event[href],
.fc-event.fc-draggable {
  cursor: pointer;
  /* give events with links and draggable events a hand mouse pointer */ }

.fc-not-allowed,
.fc-not-allowed .fc-event {
  /* to override an event's custom cursor */
  cursor: not-allowed; }

.fc-event .fc-bg {
  /* the generic .fc-bg already does position */
  z-index: 1;
  background: #FFFFFF;
  opacity: .25; }

.fc-event .fc-content {
  position: relative;
  z-index: 2; }

/* resizer (cursor AND touch devices) */
.fc-event .fc-resizer {
  position: absolute;
  z-index: 4; }

/* resizer (touch devices) */
.fc-event .fc-resizer {
  display: none; }

.fc-event.fc-allow-mouse-resize .fc-resizer,
.fc-event.fc-selected .fc-resizer {
  /* only show when hovering or selected (with touch) */
  display: block; }

/* hit area */
.fc-event.fc-selected .fc-resizer:before {
  /* 40x40 touch area */
  content: "";
  position: absolute;
  z-index: 9999;
  /* user of this util can scope within a lower z-index */
  top: 50%;
  left: 50%;
  width: 40px;
  height: 40px;
  margin-left: -20px;
  margin-top: -20px; }

/* Event Selection (only for touch devices)
--------------------------------------------------------------------------------------------------*/
.fc-event.fc-selected {
  z-index: 9999 !important;
  /* overcomes inline z-index */
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); }

.fc-event.fc-selected.fc-dragging {
  box-shadow: 0 2px 7px rgba(0, 0, 0, 0.3); }

/* Horizontal Events
--------------------------------------------------------------------------------------------------*/
/* bigger touch area when selected */
.fc-h-event.fc-selected:before {
  content: "";
  position: absolute;
  z-index: 3;
  /* below resizers */
  top: -10px;
  bottom: -10px;
  left: 0;
  right: 0; }

/* events that are continuing to/from another week. kill rounded corners and butt up against edge */
.fc-ltr .fc-h-event.fc-not-start,
.fc-rtl .fc-h-event.fc-not-end {
  margin-left: 0;
  border-left-width: 0;
  padding-left: 1px;
  /* replace the border with padding */
  border-top-left-radius: 0;
  border-bottom-left-radius: 0; }

.fc-ltr .fc-h-event.fc-not-end,
.fc-rtl .fc-h-event.fc-not-start {
  margin-right: 0;
  border-right-width: 0;
  padding-right: 1px;
  /* replace the border with padding */
  border-top-right-radius: 0;
  border-bottom-right-radius: 0; }

/* resizer (cursor AND touch devices) */
/* left resizer  */
.fc-ltr .fc-h-event .fc-start-resizer,
.fc-rtl .fc-h-event .fc-end-resizer {
  cursor: w-resize;
  left: -1px;
  /* overcome border */ }

/* right resizer */
.fc-ltr .fc-h-event .fc-end-resizer,
.fc-rtl .fc-h-event .fc-start-resizer {
  cursor: e-resize;
  right: -1px;
  /* overcome border */ }

/* resizer (mouse devices) */
.fc-h-event.fc-allow-mouse-resize .fc-resizer {
  width: 7px;
  top: -1px;
  /* overcome top border */
  bottom: -1px;
  /* overcome bottom border */ }

/* resizer (touch devices) */
.fc-h-event.fc-selected .fc-resizer {
  /* 8x8 little dot */
  border-radius: 4px;
  border-width: 1px;
  width: 6px;
  height: 6px;
  border-style: solid;
  border-color: inherit;
  background: #fff;
  /* vertically center */
  top: 50%;
  margin-top: -4px; }

/* left resizer  */
.fc-ltr .fc-h-event.fc-selected .fc-start-resizer,
.fc-rtl .fc-h-event.fc-selected .fc-end-resizer {
  margin-left: -4px;
  /* centers the 8x8 dot on the left edge */ }

/* right resizer */
.fc-ltr .fc-h-event.fc-selected .fc-end-resizer,
.fc-rtl .fc-h-event.fc-selected .fc-start-resizer {
  margin-right: -4px;
  /* centers the 8x8 dot on the right edge */ }

/* DayGrid events
----------------------------------------------------------------------------------------------------
We use the full "fc-day-grid-event" class instead of using descendants because the event won't
be a descendant of the grid when it is being dragged.
*/
.fc-day-grid-event {
  margin: 2px 5px 0;
  /* spacing between events and edges */
  padding: 0 1px; }

tr:first-child > td > .fc-day-grid-event {
  margin-top: 2px;
  /* a little bit more space before the first event */ }

.fc-day-grid-event.fc-selected:after {
  content: "";
  position: absolute;
  z-index: 1;
  /* same z-index as fc-bg, behind text */
  /* overcome the borders */
  top: -1px;
  right: -1px;
  bottom: -1px;
  left: -1px;
  /* darkening effect */
  background: #000;
  opacity: .25; }

.fc-day-grid-event .fc-content {
  /* force events to be one-line tall */
  white-space: nowrap;
  overflow: hidden; }

.fc-day-grid-event .fc-time {
  font-weight: bold; }

/* resizer (cursor devices) */
/* left resizer  */
.fc-ltr .fc-day-grid-event.fc-allow-mouse-resize .fc-start-resizer,
.fc-rtl .fc-day-grid-event.fc-allow-mouse-resize .fc-end-resizer {
  margin-left: -2px;
  /* to the day cell's edge */ }

/* right resizer */
.fc-ltr .fc-day-grid-event.fc-allow-mouse-resize .fc-end-resizer,
.fc-rtl .fc-day-grid-event.fc-allow-mouse-resize .fc-start-resizer {
  margin-right: -2px;
  /* to the day cell's edge */ }

/* Event Limiting
--------------------------------------------------------------------------------------------------*/
/* "more" link that represents hidden events */
a.fc-more {
  margin: 1px 3px;
  font-size: .85em;
  cursor: pointer;
  text-decoration: none; }

a.fc-more:hover {
  text-decoration: underline; }

.fc-limited {
  /* rows and cells that are hidden because of a "more" link */
  display: none; }

/* popover that appears when "more" link is clicked */
.fc-day-grid .fc-row {
  z-index: 1;
  /* make the "more" popover one higher than this */ }

.fc-more-popover {
  z-index: 2;
  width: 220px; }

.fc-more-popover .fc-event-container {
  padding: 10px; }

/* Now Indicator
--------------------------------------------------------------------------------------------------*/
.fc-now-indicator {
  position: absolute;
  border: 0 solid red; }

/* Utilities
--------------------------------------------------------------------------------------------------*/
.fc-unselectable {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-touch-callout: none;
  -webkit-tap-highlight-color: transparent; }

/* Toolbar
--------------------------------------------------------------------------------------------------*/
.fc-toolbar {
  text-align: center;
  margin-bottom: 1em; }

.fc-toolbar .fc-left {
  float: left; }

.fc-toolbar .fc-right {
  float: right; }

.fc-toolbar .fc-center {
  display: inline-block; }

/* the things within each left/right/center section */
.fc .fc-toolbar > * > * {
  /* extra precedence to override button border margins */
  float: left;
  margin-left: .75em; }

/* the first thing within each left/center/right section */
.fc .fc-toolbar > * > :first-child {
  /* extra precedence to override button border margins */
  margin-left: 0; }

/* title text */
.fc-toolbar h2 {
  margin: 0;
  font-size: 1.8em; }

/* button layering (for border precedence) */
.fc-toolbar button {
  position: relative; }

.fc-toolbar .fc-state-hover,
.fc-toolbar .ui-state-hover {
  z-index: 2; }

.fc-toolbar .fc-state-down {
  z-index: 3; }

.fc-toolbar .fc-state-active,
.fc-toolbar .ui-state-active {
  z-index: 4; }

.fc-toolbar button:focus {
  z-index: 5; }

/* View Structure
--------------------------------------------------------------------------------------------------*/
/* undo twitter bootstrap's box-sizing rules. normalizes positioning techniques */
/* don't do this for the toolbar because we'll want bootstrap to style those buttons as some pt */
.fc-view-container *,
.fc-view-container *:before,
.fc-view-container *:after {
  box-sizing: content-box; }

.fc-view,
.fc-view > table {
  /* so dragged elements can be above the view's main element */
  position: relative;
  z-index: 1; }

/* BasicView
--------------------------------------------------------------------------------------------------*/
/* day row structure */
.fc-basicWeek-view .fc-content-skeleton,
.fc-basicDay-view .fc-content-skeleton {
  /* there may be week numbers in these views, so no padding-top */
  padding-bottom: 1em;
  /* ensure a space at bottom of cell for user selecting/clicking */ }

.fc-basic-view .fc-body .fc-row {
  min-height: 4em;
  /* ensure that all rows are at least this tall */ }

/* a "rigid" row will take up a constant amount of height because content-skeleton is absolute */
.fc-row.fc-rigid {
  overflow: hidden; }

.fc-row.fc-rigid .fc-content-skeleton {
  position: absolute;
  top: 0;
  left: 0;
  right: 0; }

/* week and day number styling */
.fc-day-top.fc-other-month {
  opacity: 0.3; }

.fc-basic-view .fc-week-number,
.fc-basic-view .fc-day-number {
  padding: 2px; }

.fc-basic-view th.fc-week-number,
.fc-basic-view th.fc-day-number {
  padding: 0 2px;
  /* column headers can't have as much v space */ }

.fc-ltr .fc-basic-view .fc-day-top .fc-day-number {
  float: right; }

.fc-rtl .fc-basic-view .fc-day-top .fc-day-number {
  float: left; }

.fc-ltr .fc-basic-view .fc-day-top .fc-week-number {
  float: left;
  border-radius: 0 0 3px 0; }

.fc-rtl .fc-basic-view .fc-day-top .fc-week-number {
  float: right;
  border-radius: 0 0 0 3px; }

.fc-basic-view .fc-day-top .fc-week-number {
  min-width: 1.5em;
  text-align: center;
  background-color: #f2f2f2;
  color: #808080; }

/* when week/day number have own column */
.fc-basic-view td.fc-week-number {
  text-align: center; }

.fc-basic-view td.fc-week-number > * {
  /* work around the way we do column resizing and ensure a minimum width */
  display: inline-block;
  min-width: 1.25em; }

/* AgendaView all-day area
--------------------------------------------------------------------------------------------------*/
.fc-agenda-view .fc-day-grid {
  position: relative;
  z-index: 2;
  /* so the "more.." popover will be over the time grid */ }

.fc-agenda-view .fc-day-grid .fc-row {
  min-height: 3em;
  /* all-day section will never get shorter than this */ }

.fc-agenda-view .fc-day-grid .fc-row .fc-content-skeleton {
  padding-bottom: 1em;
  /* give space underneath events for clicking/selecting days */ }

/* TimeGrid axis running down the side (for both the all-day area and the slot area)
--------------------------------------------------------------------------------------------------*/
.fc .fc-axis {
  /* .fc to overcome default cell styles */
  vertical-align: middle;
  padding: 0 4px;
  white-space: nowrap; }

.fc-ltr .fc-axis {
  text-align: right; }

.fc-rtl .fc-axis {
  text-align: left; }

.ui-widget td.fc-axis {
  font-weight: normal;
  /* overcome jqui theme making it bold */ }

/* TimeGrid Structure
--------------------------------------------------------------------------------------------------*/
.fc-time-grid-container,
.fc-time-grid {
  /* so slats/bg/content/etc positions get scoped within here */
  position: relative;
  z-index: 1; }

.fc-time-grid {
  min-height: 100%;
  /* so if height setting is 'auto', .fc-bg stretches to fill height */ }

.fc-time-grid table {
  /* don't put outer borders on slats/bg/content/etc */
  border: 0 hidden transparent; }

.fc-time-grid > .fc-bg {
  z-index: 1; }

.fc-time-grid .fc-slats,
.fc-time-grid > hr {
  /* the <hr> AgendaView injects when grid is shorter than scroller */
  position: relative;
  z-index: 2; }

.fc-time-grid .fc-content-col {
  position: relative;
  /* because now-indicator lives directly inside */ }

.fc-time-grid .fc-content-skeleton {
  position: absolute;
  z-index: 3;
  top: 0;
  left: 0;
  right: 0; }

/* divs within a cell within the fc-content-skeleton */
.fc-time-grid .fc-business-container {
  position: relative;
  z-index: 1; }

.fc-time-grid .fc-bgevent-container {
  position: relative;
  z-index: 2; }

.fc-time-grid .fc-highlight-container {
  position: relative;
  z-index: 3; }

.fc-time-grid .fc-event-container {
  position: relative;
  z-index: 4; }

.fc-time-grid .fc-now-indicator-line {
  z-index: 5; }

.fc-time-grid .fc-helper-container {
  /* also is fc-event-container */
  position: relative;
  z-index: 6; }

/* TimeGrid Slats (lines that run horizontally)
--------------------------------------------------------------------------------------------------*/
.fc-time-grid .fc-slats td {
  height: 1.5em;
  border-bottom: 0;
  /* each cell is responsible for its top border */ }

.fc-time-grid .fc-slats .fc-minor td {
  border-top-style: dotted; }

.fc-time-grid .fc-slats .ui-widget-content {
  /* for jqui theme */
  background: none;
  /* see through to fc-bg */ }

/* TimeGrid Highlighting Slots
--------------------------------------------------------------------------------------------------*/
.fc-time-grid .fc-highlight-container {
  /* a div within a cell within the fc-highlight-skeleton */
  position: relative;
  /* scopes the left/right of the fc-highlight to be in the column */ }

.fc-time-grid .fc-highlight {
  position: absolute;
  left: 0;
  right: 0;
  /* top and bottom will be in by JS */ }

/* TimeGrid Event Containment
--------------------------------------------------------------------------------------------------*/
.fc-ltr .fc-time-grid .fc-event-container {
  /* space on the sides of events for LTR (default) */
  margin: 0 2.5% 0 2px; }

.fc-rtl .fc-time-grid .fc-event-container {
  /* space on the sides of events for RTL */
  margin: 0 2px 0 2.5%; }

.fc-time-grid .fc-event,
.fc-time-grid .fc-bgevent {
  position: absolute;
  z-index: 1;
  /* scope inner z-index's */ }

.fc-time-grid .fc-bgevent {
  /* background events always span full width */
  left: 0;
  right: 0; }

/* Generic Vertical Event
--------------------------------------------------------------------------------------------------*/
.fc-v-event.fc-not-start {
  /* events that are continuing from another day */
  /* replace space made by the top border with padding */
  border-top-width: 0;
  padding-top: 1px;
  /* remove top rounded corners */
  border-top-left-radius: 0;
  border-top-right-radius: 0; }

.fc-v-event.fc-not-end {
  /* replace space made by the top border with padding */
  border-bottom-width: 0;
  padding-bottom: 1px;
  /* remove bottom rounded corners */
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0; }

/* TimeGrid Event Styling
----------------------------------------------------------------------------------------------------
We use the full "fc-time-grid-event" class instead of using descendants because the event won't
be a descendant of the grid when it is being dragged.
*/
.fc-time-grid-event {
  overflow: hidden;
  /* don't let the bg flow over rounded corners */ }

.fc-time-grid-event.fc-selected {
  /* need to allow touch resizers to extend outside event's bounding box */
  /* common fc-selected styles hide the fc-bg, so don't need this anyway */
  overflow: visible; }

.fc-time-grid-event.fc-selected .fc-bg {
  display: none;
  /* hide semi-white background, to appear darker */ }

.fc-time-grid-event .fc-content {
  overflow: hidden;
  /* for when .fc-selected */ }

.fc-time-grid-event .fc-time,
.fc-time-grid-event .fc-title {
  padding: 0 1px; }

.fc-time-grid-event .fc-time {
  font-size: .85em;
  white-space: nowrap; }

/* short mode, where time and title are on the same line */
.fc-time-grid-event.fc-short .fc-content {
  /* don't wrap to second line (now that contents will be inline) */
  white-space: nowrap; }

.fc-time-grid-event.fc-short .fc-time,
.fc-time-grid-event.fc-short .fc-title {
  /* put the time and title on the same line */
  display: inline-block;
  vertical-align: top; }

.fc-time-grid-event.fc-short .fc-time span {
  display: none;
  /* don't display the full time text... */ }

.fc-time-grid-event.fc-short .fc-time:before {
  content: attr(data-start);
  /* ...instead, display only the start time */ }

.fc-time-grid-event.fc-short .fc-time:after {
  content: "\A0-\A0";
  /* seperate with a dash, wrapped in nbsp's */ }

.fc-time-grid-event.fc-short .fc-title {
  font-size: .85em;
  /* make the title text the same size as the time */
  padding: 0;
  /* undo padding from above */ }

/* resizer (cursor device) */
.fc-time-grid-event.fc-allow-mouse-resize .fc-resizer {
  left: 0;
  right: 0;
  bottom: 0;
  height: 8px;
  overflow: hidden;
  line-height: 8px;
  font-size: 11px;
  font-family: monospace;
  text-align: center;
  cursor: s-resize; }

.fc-time-grid-event.fc-allow-mouse-resize .fc-resizer:after {
  content: "="; }

/* resizer (touch device) */
.fc-time-grid-event.fc-selected .fc-resizer {
  /* 10x10 dot */
  border-radius: 5px;
  border-width: 1px;
  width: 8px;
  height: 8px;
  border-style: solid;
  border-color: inherit;
  background: #fff;
  /* horizontally center */
  left: 50%;
  margin-left: -5px;
  /* center on the bottom edge */
  bottom: -5px; }

/* Now Indicator
--------------------------------------------------------------------------------------------------*/
.fc-time-grid .fc-now-indicator-line {
  border-top-width: 1px;
  left: 0;
  right: 0; }

/* arrow on axis */
.fc-time-grid .fc-now-indicator-arrow {
  margin-top: -5px;
  /* vertically center on top coordinate */ }

.fc-ltr .fc-time-grid .fc-now-indicator-arrow {
  left: 0;
  /* triangle pointing right... */
  border-width: 5px 0 5px 6px;
  border-top-color: transparent;
  border-bottom-color: transparent; }

.fc-rtl .fc-time-grid .fc-now-indicator-arrow {
  right: 0;
  /* triangle pointing left... */
  border-width: 5px 6px 5px 0;
  border-top-color: transparent;
  border-bottom-color: transparent; }

/* List View
--------------------------------------------------------------------------------------------------*/
/* possibly reusable */
.fc-event-dot {
  display: inline-block;
  width: 10px;
  height: 10px;
  border-radius: 5px; }

/* view wrapper */
.fc-rtl .fc-list-view {
  direction: rtl;
  /* unlike core views, leverage browser RTL */ }

.fc-list-view {
  border-width: 1px;
  border-style: solid; }

/* table resets */
.fc .fc-list-table {
  table-layout: auto;
  /* for shrinkwrapping cell content */ }

.fc-list-table td {
  border-width: 1px 0 0;
  padding: 8px 14px; }

.fc-list-table tr:first-child td {
  border-top-width: 0; }

/* day headings with the list */
.fc-list-heading {
  border-bottom-width: 1px; }

.fc-list-heading td {
  font-weight: bold; }

.fc-ltr .fc-list-heading-main {
  float: left; }

.fc-ltr .fc-list-heading-alt {
  float: right; }

.fc-rtl .fc-list-heading-main {
  float: right; }

.fc-rtl .fc-list-heading-alt {
  float: left; }

/* event list items */
.fc-list-item.fc-has-url {
  cursor: pointer;
  /* whole row will be clickable */ }

.fc-list-item:hover td {
  background-color: #f5f5f5; }

.fc-list-item-marker,
.fc-list-item-time {
  white-space: nowrap;
  width: 1px; }

/* make the dot closer to the event title */
.fc-ltr .fc-list-item-marker {
  padding-right: 0; }

.fc-rtl .fc-list-item-marker {
  padding-left: 0; }

.fc-list-item-title a {
  /* every event title cell has an <a> tag */
  text-decoration: none;
  color: inherit; }

.fc-list-item-title a[href]:hover {
  /* hover effect only on titles with hrefs */
  text-decoration: underline; }

/* message when no events */
.fc-list-empty-wrap2 {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0; }

.fc-list-empty-wrap1 {
  width: 100%;
  height: 100%;
  display: table; }

.fc-list-empty {
  display: table-cell;
  vertical-align: middle;
  text-align: center; }

.fc-unthemed .fc-list-empty {
  /* theme will provide own background */
  background-color: #eee; }

.card-calendar table td {
  text-align: right; }

.card-calendar .content {
  padding: 0 !important; }

.card-calendar .fc-toolbar {
  padding-top: 20px;
  padding-left: 20px;
  padding-right: 20px; }

.card-calendar .fc td:first-child {
  border-left: 0; }

.card-calendar .fc td:last-child {
  border-right: 0; }

.card-calendar .fc-basic-view td:last-child.fc-week-number span,
.card-calendar .fc-basic-view td:last-child.fc-day-number {
  padding-right: 20px; }

.card-calendar .fc .fc-day-header:last-child {
  padding-right: 15px; }

.card-calendar .fc .fc-widget-header {
  border: 0; }
  .card-calendar .fc .fc-widget-header .fc-title {
    color: #FFFFFF; }

.card-calendar .fc th {
  text-align: right;
  color: #999999; }

.card-calendar .title {
  margin-top: -9px; }

.card-calendar .fc .fc-row:last-child td {
  border-bottom: 0; }

.card-calendar .fc .fc-body .fc-widget-content {
  border-bottom: 0; }

.wizard-card {
  min-height: 410px;
  box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2); }
  .wizard-card .picture-container {
    position: relative;
    cursor: pointer;
    text-align: center; }
  .wizard-card .wizard-navigation {
    position: relative; }
  .wizard-card .picture {
    width: 106px;
    height: 106px;
    background-color: #999999;
    border: 4px solid #CCCCCC;
    color: #FFFFFF;
    border-radius: 50%;
    margin: 5px auto;
    overflow: hidden;
    transition: all 0.2s;
    -webkit-transition: all 0.2s; }
    .wizard-card .picture:hover {
      border-color: #2ca8ff; }
  .wizard-card .moving-tab {
    position: absolute;
    text-align: center;
    padding: 12px;
    font-size: 12px;
    text-transform: uppercase;
    -webkit-font-smoothing: subpixel-antialiased;
    top: -4px;
    left: 0px;
    border-radius: 4px;
    color: #FFFFFF;
    cursor: pointer;
    font-weight: 500; }
  .wizard-card[data-color="purple"] .moving-tab {
    background-color: #9c27b0;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(156, 39, 176, 0.4); }
  .wizard-card[data-color="purple"] .picture:hover {
    border-color: #9c27b0; }
  .wizard-card[data-color="purple"] .choice:hover .icon, .wizard-card[data-color="purple"] .choice.active .icon {
    border-color: #9c27b0;
    color: #9c27b0; }
  .wizard-card[data-color="purple"] .form-group .form-control {
    background-image: linear-gradient(#9c27b0, #9c27b0), linear-gradient(#D2D2D2, #D2D2D2); }
  .wizard-card[data-color="purple"] .checkbox input[type=checkbox]:checked + .checkbox-material .check {
    background-color: #9c27b0; }
  .wizard-card[data-color="purple"] .radio input[type=radio]:checked ~ .check {
    background-color: #9c27b0; }
  .wizard-card[data-color="purple"] .radio input[type=radio]:checked ~ .circle {
    border-color: #9c27b0; }
  .wizard-card[data-color="green"] .moving-tab {
    background-color: #4caf50;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(76, 175, 80, 0.4); }
  .wizard-card[data-color="green"] .picture:hover {
    border-color: #4caf50; }
  .wizard-card[data-color="green"] .choice:hover .icon, .wizard-card[data-color="green"] .choice.active .icon {
    border-color: #4caf50;
    color: #4caf50; }
  .wizard-card[data-color="green"] .form-group .form-control {
    background-image: linear-gradient(#4caf50, #4caf50), linear-gradient(#D2D2D2, #D2D2D2); }
  .wizard-card[data-color="green"] .checkbox input[type=checkbox]:checked + .checkbox-material .check {
    background-color: #4caf50; }
  .wizard-card[data-color="green"] .radio input[type=radio]:checked ~ .check {
    background-color: #4caf50; }
  .wizard-card[data-color="green"] .radio input[type=radio]:checked ~ .circle {
    border-color: #4caf50; }
  .wizard-card[data-color="blue"] .moving-tab {
    background-color: #00bcd4;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(0, 188, 212, 0.4); }
  .wizard-card[data-color="blue"] .picture:hover {
    border-color: #00bcd4; }
  .wizard-card[data-color="blue"] .choice:hover .icon, .wizard-card[data-color="blue"] .choice.active .icon {
    border-color: #00bcd4;
    color: #00bcd4; }
  .wizard-card[data-color="blue"] .form-group .form-control {
    background-image: linear-gradient(#00bcd4, #00bcd4), linear-gradient(#D2D2D2, #D2D2D2); }
  .wizard-card[data-color="blue"] .checkbox input[type=checkbox]:checked + .checkbox-material .check {
    background-color: #00bcd4; }
  .wizard-card[data-color="blue"] .radio input[type=radio]:checked ~ .check {
    background-color: #00bcd4; }
  .wizard-card[data-color="blue"] .radio input[type=radio]:checked ~ .circle {
    border-color: #00bcd4; }
  .wizard-card[data-color="orange"] .moving-tab {
    background-color: #ff9800;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 152, 0, 0.4); }
  .wizard-card[data-color="orange"] .picture:hover {
    border-color: #ff9800; }
  .wizard-card[data-color="orange"] .choice:hover .icon, .wizard-card[data-color="orange"] .choice.active .icon {
    border-color: #ff9800;
    color: #ff9800; }
  .wizard-card[data-color="orange"] .form-group .form-control {
    background-image: linear-gradient(#ff9800, #ff9800), linear-gradient(#D2D2D2, #D2D2D2); }
  .wizard-card[data-color="orange"] .checkbox input[type=checkbox]:checked + .checkbox-material .check {
    background-color: #ff9800; }
  .wizard-card[data-color="orange"] .radio input[type=radio]:checked ~ .check {
    background-color: #ff9800; }
  .wizard-card[data-color="orange"] .radio input[type=radio]:checked ~ .circle {
    border-color: #ff9800; }
  .wizard-card[data-color="red"] .moving-tab {
    background-color: #f44336;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(244, 67, 54, 0.4); }
  .wizard-card[data-color="red"] .picture:hover {
    border-color: #f44336; }
  .wizard-card[data-color="red"] .choice:hover .icon, .wizard-card[data-color="red"] .choice.active .icon {
    border-color: #f44336;
    color: #f44336; }
  .wizard-card[data-color="red"] .form-group .form-control {
    background-image: linear-gradient(#f44336, #f44336), linear-gradient(#D2D2D2, #D2D2D2); }
  .wizard-card[data-color="red"] .checkbox input[type=checkbox]:checked + .checkbox-material .check {
    background-color: #f44336; }
  .wizard-card[data-color="red"] .radio input[type=radio]:checked ~ .check {
    background-color: #f44336; }
  .wizard-card[data-color="red"] .radio input[type=radio]:checked ~ .circle {
    border-color: #f44336; }
  .wizard-card[data-color="rose"] .moving-tab {
    background-color: #e91e63;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(233, 30, 99, 0.4); }
  .wizard-card[data-color="rose"] .picture:hover {
    border-color: #e91e63; }
  .wizard-card[data-color="rose"] .choice:hover .icon, .wizard-card[data-color="rose"] .choice.active .icon {
    border-color: #e91e63;
    color: #e91e63; }
  .wizard-card[data-color="rose"] .form-group .form-control {
    background-image: linear-gradient(#e91e63, #e91e63), linear-gradient(#D2D2D2, #D2D2D2); }
  .wizard-card[data-color="rose"] .checkbox input[type=checkbox]:checked + .checkbox-material .check {
    background-color: #e91e63; }
  .wizard-card[data-color="rose"] .radio input[type=radio]:checked ~ .check {
    background-color: #e91e63; }
  .wizard-card[data-color="rose"] .radio input[type=radio]:checked ~ .circle {
    border-color: #e91e63; }
  .wizard-card .picture input[type="file"] {
    cursor: pointer;
    display: block;
    height: 100%;
    left: 0;
    opacity: 0 !important;
    position: absolute;
    top: 0;
    width: 100%; }
  .wizard-card .picture-src {
    width: 100%; }
  .wizard-card .tab-content {
    min-height: 340px;
    padding: 20px 15px; }
  .wizard-card .wizard-footer {
    padding: 0 15px; }
    .wizard-card .wizard-footer .checkbox {
      margin-top: 16px; }
  .wizard-card .disabled {
    display: none; }
  .wizard-card .wizard-header {
    text-align: center;
    padding: 25px 0 35px; }
    .wizard-card .wizard-header h5 {
      margin: 5px 0 0; }
  .wizard-card .nav-pills > li {
    text-align: center; }
  .wizard-card .btn {
    text-transform: uppercase; }
  .wizard-card .info-text {
    text-align: center;
    font-weight: 300;
    margin: 10px 0 30px; }
  .wizard-card .choice {
    text-align: center;
    cursor: pointer;
    margin-top: 20px; }
    .wizard-card .choice[disabled] {
      pointer-events: none;
      cursor: not-allowed;
      opacity: .26; }
    .wizard-card .choice .icon {
      text-align: center;
      vertical-align: middle;
      height: 116px;
      width: 116px;
      border-radius: 50%;
      color: #999999;
      margin: 0 auto 20px;
      border: 4px solid #CCCCCC;
      transition: all 0.2s;
      -webkit-transition: all 0.2s; }
    .wizard-card .choice i {
      font-size: 40px;
      line-height: 111px; }
    .wizard-card .choice:hover .icon, .wizard-card .choice.active .icon {
      border-color: #2ca8ff; }
    .wizard-card .choice input[type="radio"],
    .wizard-card .choice input[type="checkbox"] {
      position: absolute;
      left: -10000px;
      z-index: -1; }
  .wizard-card .btn-finish {
    display: none; }
  .wizard-card .description {
    color: #999999;
    font-size: 14px; }
  .wizard-card .wizard-title {
    margin: 0; }
  .wizard-card .nav-pills {
    background-color: rgba(200, 200, 200, 0.2); }
    .wizard-card .nav-pills > li + li {
      margin-left: 0; }
    .wizard-card .nav-pills > li > a {
      border: 0 !important;
      border-radius: 0;
      line-height: 18px;
      text-transform: uppercase;
      font-size: 12px;
      font-weight: 500;
      min-width: 100px;
      text-align: center;
      color: #555555 !important; }
    .wizard-card .nav-pills > li.active > a,
    .wizard-card .nav-pills > li.active > a:hover,
    .wizard-card .nav-pills > li.active > a:focus,
    .wizard-card .nav-pills > li > a:hover,
    .wizard-card .nav-pills > li > a:focus {
      background-color: inherit;
      box-shadow: none; }
    .wizard-card .nav-pills > li i {
      display: block;
      font-size: 30px;
      padding: 15px 0; }

.ct-label {
  fill: rgba(0, 0, 0, 0.4);
  color: rgba(0, 0, 0, 0.4);
  font-size: 1.3rem;
  line-height: 1; }

.ct-chart-line .ct-label,
.ct-chart-bar .ct-label {
  display: block;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex; }

.ct-label.ct-horizontal.ct-start {
  -webkit-box-align: flex-end;
  -ms-flex-align: flex-end;
  align-items: flex-end;
  -webkit-box-pack: flex-start;
  -ms-flex-pack: flex-start;
  justify-content: flex-start;
  text-align: left;
  text-anchor: start; }

.ct-label.ct-horizontal.ct-end {
  -webkit-box-align: flex-start;
  -ms-flex-align: flex-start;
  align-items: flex-start;
  -webkit-box-pack: flex-start;
  -ms-flex-pack: flex-start;
  justify-content: flex-start;
  text-align: left;
  text-anchor: start; }

.ct-label.ct-vertical.ct-start {
  -webkit-box-align: flex-end;
  -ms-flex-align: flex-end;
  align-items: flex-end;
  -webkit-box-pack: flex-end;
  -ms-flex-pack: flex-end;
  justify-content: flex-end;
  text-align: right;
  text-anchor: end; }

.ct-label.ct-vertical.ct-end {
  -webkit-box-align: flex-end;
  -ms-flex-align: flex-end;
  align-items: flex-end;
  -webkit-box-pack: flex-start;
  -ms-flex-pack: flex-start;
  justify-content: flex-start;
  text-align: left;
  text-anchor: start; }

.ct-chart-bar .ct-label.ct-horizontal.ct-start {
  -webkit-box-align: flex-end;
  -ms-flex-align: flex-end;
  align-items: flex-end;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  text-align: center;
  text-anchor: start; }

.ct-chart-bar .ct-label.ct-horizontal.ct-end {
  -webkit-box-align: flex-start;
  -ms-flex-align: flex-start;
  align-items: flex-start;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  text-align: center;
  text-anchor: start; }

.ct-chart-bar.ct-horizontal-bars .ct-label.ct-horizontal.ct-start {
  -webkit-box-align: flex-end;
  -ms-flex-align: flex-end;
  align-items: flex-end;
  -webkit-box-pack: flex-start;
  -ms-flex-pack: flex-start;
  justify-content: flex-start;
  text-align: left;
  text-anchor: start; }

.ct-chart-bar.ct-horizontal-bars .ct-label.ct-horizontal.ct-end {
  -webkit-box-align: flex-start;
  -ms-flex-align: flex-start;
  align-items: flex-start;
  -webkit-box-pack: flex-start;
  -ms-flex-pack: flex-start;
  justify-content: flex-start;
  text-align: left;
  text-anchor: start; }

.ct-chart-bar.ct-horizontal-bars .ct-label.ct-vertical.ct-start {
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: flex-end;
  -ms-flex-pack: flex-end;
  justify-content: flex-end;
  text-align: right;
  text-anchor: end; }

.ct-chart-bar.ct-horizontal-bars .ct-label.ct-vertical.ct-end {
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: flex-start;
  -ms-flex-pack: flex-start;
  justify-content: flex-start;
  text-align: left;
  text-anchor: end; }

.ct-grid {
  stroke: rgba(0, 0, 0, 0.2);
  stroke-width: 1px;
  stroke-dasharray: 2px; }

.ct-point {
  stroke-width: 8px;
  stroke-linecap: round; }

.ct-line {
  fill: none;
  stroke-width: 3px; }

.ct-area {
  stroke: none;
  fill-opacity: 0.8; }

.ct-bar {
  fill: none;
  stroke-width: 10px; }

.ct-slice-donut {
  fill: none;
  stroke-width: 60px; }

.ct-series-a .ct-point, .ct-series-a .ct-line, .ct-series-a .ct-bar, .ct-series-a .ct-slice-donut {
  stroke: #00bcd4; }

.ct-series-a .ct-slice-pie, .ct-series-a .ct-area {
  fill: #00bcd4; }

.ct-series-b .ct-point, .ct-series-b .ct-line, .ct-series-b .ct-bar, .ct-series-b .ct-slice-donut {
  stroke: #f44336; }

.ct-series-b .ct-slice-pie, .ct-series-b .ct-area {
  fill: #f44336; }

.ct-series-c .ct-point, .ct-series-c .ct-line, .ct-series-c .ct-bar, .ct-series-c .ct-slice-donut {
  stroke: #ff9800; }

.ct-series-c .ct-slice-pie, .ct-series-c .ct-area {
  fill: #ff9800; }

.ct-series-d .ct-point, .ct-series-d .ct-line, .ct-series-d .ct-bar, .ct-series-d .ct-slice-donut {
  stroke: #9c27b0; }

.ct-series-d .ct-slice-pie, .ct-series-d .ct-area {
  fill: #9c27b0; }

.ct-series-e .ct-point, .ct-series-e .ct-line, .ct-series-e .ct-bar, .ct-series-e .ct-slice-donut {
  stroke: #4caf50; }

.ct-series-e .ct-slice-pie, .ct-series-e .ct-area {
  fill: #4caf50; }

.ct-series-f .ct-point, .ct-series-f .ct-line, .ct-series-f .ct-bar, .ct-series-f .ct-slice-donut {
  stroke: #9C9B99; }

.ct-series-f .ct-slice-pie, .ct-series-f .ct-area {
  fill: #9C9B99; }

.ct-series-g .ct-point, .ct-series-g .ct-line, .ct-series-g .ct-bar, .ct-series-g .ct-slice-donut {
  stroke: #999999; }

.ct-series-g .ct-slice-pie, .ct-series-g .ct-area {
  fill: #999999; }

.ct-series-h .ct-point, .ct-series-h .ct-line, .ct-series-h .ct-bar, .ct-series-h .ct-slice-donut {
  stroke: #dd4b39; }

.ct-series-h .ct-slice-pie, .ct-series-h .ct-area {
  fill: #dd4b39; }

.ct-series-i .ct-point, .ct-series-i .ct-line, .ct-series-i .ct-bar, .ct-series-i .ct-slice-donut {
  stroke: #35465c; }

.ct-series-i .ct-slice-pie, .ct-series-i .ct-area {
  fill: #35465c; }

.ct-series-j .ct-point, .ct-series-j .ct-line, .ct-series-j .ct-bar, .ct-series-j .ct-slice-donut {
  stroke: #e52d27; }

.ct-series-j .ct-slice-pie, .ct-series-j .ct-area {
  fill: #e52d27; }

.ct-series-k .ct-point, .ct-series-k .ct-line, .ct-series-k .ct-bar, .ct-series-k .ct-slice-donut {
  stroke: #55acee; }

.ct-series-k .ct-slice-pie, .ct-series-k .ct-area {
  fill: #55acee; }

.ct-series-l .ct-point, .ct-series-l .ct-line, .ct-series-l .ct-bar, .ct-series-l .ct-slice-donut {
  stroke: #cc2127; }

.ct-series-l .ct-slice-pie, .ct-series-l .ct-area {
  fill: #cc2127; }

.ct-series-m .ct-point, .ct-series-m .ct-line, .ct-series-m .ct-bar, .ct-series-m .ct-slice-donut {
  stroke: #1769ff; }

.ct-series-m .ct-slice-pie, .ct-series-m .ct-area {
  fill: #1769ff; }

.ct-series-n .ct-point, .ct-series-n .ct-line, .ct-series-n .ct-bar, .ct-series-n .ct-slice-donut {
  stroke: #6188e2; }

.ct-series-n .ct-slice-pie, .ct-series-n .ct-area {
  fill: #6188e2; }

.ct-series-o .ct-point, .ct-series-o .ct-line, .ct-series-o .ct-bar, .ct-series-o .ct-slice-donut {
  stroke: #a748ca; }

.ct-series-o .ct-slice-pie, .ct-series-o .ct-area {
  fill: #a748ca; }

.ct-square {
  display: block;
  position: relative;
  width: 100%; }
  .ct-square:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 100%; }
  .ct-square:after {
    content: "";
    display: table;
    clear: both; }
  .ct-square > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-minor-second {
  display: block;
  position: relative;
  width: 100%; }
  .ct-minor-second:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 93.75%; }
  .ct-minor-second:after {
    content: "";
    display: table;
    clear: both; }
  .ct-minor-second > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-major-second {
  display: block;
  position: relative;
  width: 100%; }
  .ct-major-second:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 88.88888889%; }
  .ct-major-second:after {
    content: "";
    display: table;
    clear: both; }
  .ct-major-second > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-minor-third {
  display: block;
  position: relative;
  width: 100%; }
  .ct-minor-third:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 83.33333333%; }
  .ct-minor-third:after {
    content: "";
    display: table;
    clear: both; }
  .ct-minor-third > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-major-third {
  display: block;
  position: relative;
  width: 100%; }
  .ct-major-third:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 80%; }
  .ct-major-third:after {
    content: "";
    display: table;
    clear: both; }
  .ct-major-third > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-perfect-fourth {
  display: block;
  position: relative;
  width: 100%; }
  .ct-perfect-fourth:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 75%; }
  .ct-perfect-fourth:after {
    content: "";
    display: table;
    clear: both; }
  .ct-perfect-fourth > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-perfect-fifth {
  display: block;
  position: relative;
  width: 100%; }
  .ct-perfect-fifth:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 66.66666667%; }
  .ct-perfect-fifth:after {
    content: "";
    display: table;
    clear: both; }
  .ct-perfect-fifth > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-minor-sixth {
  display: block;
  position: relative;
  width: 100%; }
  .ct-minor-sixth:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 62.5%; }
  .ct-minor-sixth:after {
    content: "";
    display: table;
    clear: both; }
  .ct-minor-sixth > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-golden-section {
  display: block;
  position: relative;
  width: 100%; }
  .ct-golden-section:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 61.80469716%; }
  .ct-golden-section:after {
    content: "";
    display: table;
    clear: both; }
  .ct-golden-section > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-major-sixth {
  display: block;
  position: relative;
  width: 100%; }
  .ct-major-sixth:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 60%; }
  .ct-major-sixth:after {
    content: "";
    display: table;
    clear: both; }
  .ct-major-sixth > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-minor-seventh {
  display: block;
  position: relative;
  width: 100%; }
  .ct-minor-seventh:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 56.25%; }
  .ct-minor-seventh:after {
    content: "";
    display: table;
    clear: both; }
  .ct-minor-seventh > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-major-seventh {
  display: block;
  position: relative;
  width: 100%; }
  .ct-major-seventh:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 53.33333333%; }
  .ct-major-seventh:after {
    content: "";
    display: table;
    clear: both; }
  .ct-major-seventh > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-octave {
  display: block;
  position: relative;
  width: 100%; }
  .ct-octave:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 50%; }
  .ct-octave:after {
    content: "";
    display: table;
    clear: both; }
  .ct-octave > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-major-tenth {
  display: block;
  position: relative;
  width: 100%; }
  .ct-major-tenth:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 40%; }
  .ct-major-tenth:after {
    content: "";
    display: table;
    clear: both; }
  .ct-major-tenth > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-major-eleventh {
  display: block;
  position: relative;
  width: 100%; }
  .ct-major-eleventh:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 37.5%; }
  .ct-major-eleventh:after {
    content: "";
    display: table;
    clear: both; }
  .ct-major-eleventh > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-major-twelfth {
  display: block;
  position: relative;
  width: 100%; }
  .ct-major-twelfth:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 33.33333333%; }
  .ct-major-twelfth:after {
    content: "";
    display: table;
    clear: both; }
  .ct-major-twelfth > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-double-octave {
  display: block;
  position: relative;
  width: 100%; }
  .ct-double-octave:before {
    display: block;
    float: left;
    content: "";
    width: 0;
    height: 0;
    padding-bottom: 25%; }
  .ct-double-octave:after {
    content: "";
    display: table;
    clear: both; }
  .ct-double-octave > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0; }

.ct-purple {
  stroke: #9c27b0 !important; }

.ct-azure {
  stroke: #00bcd4 !important; }

.ct-green {
  stroke: #4caf50 !important; }

.ct-orange {
  stroke: #ff9800 !important; }

.ct-red {
  stroke: #f44336 !important; }

.ct-white {
  stroke: #FFFFFF !important; }

.ct-rose {
  stroke: #e91e63 !important; }

.mat-select {
  width: 100%; }

.mat-select-trigger,
.mat-option {
  font-size: 16px; }

.mat-select-trigger {
  height: 22px !important;
  margin: 1em 0;
  padding-bottom: 6px; }

.mat-select-placeholder {
  line-height: normal;
  padding: 0; }

.mat-select-underline {
  bottom: 1px;
  background-color: rgba(0, 0, 0, 0.12); }

.app-dark .mat-select-panel {
  background-color: #ffffff; }

.mat-select-placeholder {
  position: relative;
  padding: 0 2px;
  -webkit-transform-origin: left top;
          transform-origin: left top;
  -webkit-box-flex: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.mat-select-disabled .mat-select-value, .mat-select-trigger {
  color: #3C4858 !important; }

.mat-select-arrow {
  display: none; }

.mat-pseudo-checkbox {
  border: none !important; }

.mat-select-content, .mat-select-panel-done-animating {
  background: white; }

.mat-option {
  color: rgba(0, 0, 0, 0.87);
  transition: all 150ms linear; }

.mat-option:hover:not(.mat-option-disabled),
.mat-option:focus:not(.mat-option-disabled) {
  background-color: #9c27b0;
  color: #FFFFFF;
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(156, 39, 176, 0.4); }

.mat-select:focus:not(.mat-select-disabled).mat-warn .mat-select-trigger, .mat-select:focus:not(.mat-select-disabled).mat-warn .mat-select-arrow, .mat-select:not(:focus).ng-invalid.ng-touched:not(.mat-select-disabled) .mat-select-trigger, .mat-select:not(:focus).ng-invalid.ng-touched:not(.mat-select-disabled) .mat-select-arrow {
  color: #f44336; }

.mat-option {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  display: block;
  line-height: 48px;
  height: 48px;
  padding: 0 16px;
  text-align: left;
  text-decoration: none;
  position: relative;
  cursor: pointer;
  outline: none;
  margin: 0 5px;
  border-radius: 2px; }
  .mat-option span {
    float: right; }

.mat-option {
  font-family: Roboto, "Helvetica Neue", sans-serif;
  font-size: 16px; }
  .mat-option .mat-option-ripple.mat-ripple {
    display: none; }

.mat-option.mat-selected:not(.mat-option-multiple) {
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(156, 39, 176, 0.4); }

.simple .mat-select-trigger {
  margin: 0;
  padding-bottom: 0;
  color: #ffffff !important;
  font-size: 12px !important; }

.simple .mat-select-arrow {
  display: block;
  float: right; }

.simple .mat-select-underline {
  display: none; }

.simple .mat-select-placeholder.mat-floating-placeholder {
  opacity: 0 !important; }

/*!
 * Bootstrap-select v1.11.2 (http://silviomoreto.github.io/bootstrap-select)
 *
 * Copyright 2013-2016 bootstrap-select
 * Licensed under MIT (https://github.com/silviomoreto/bootstrap-select/blob/master/LICENSE)
 */
select.bs-select-hidden,
select.selectpicker {
  display: none !important; }

.bootstrap-select {
  width: 220px \0;
  /*IE9 and below*/ }

.bootstrap-select > .dropdown-toggle {
  width: 100%;
  padding-right: 25px;
  z-index: 1; }

.bootstrap-select > select {
  position: absolute !important;
  bottom: 0;
  left: 50%;
  display: block !important;
  width: 0.5px !important;
  height: 100% !important;
  padding: 0 !important;
  opacity: 0 !important;
  border: none; }

.bootstrap-select > select.mobile-device {
  top: 0;
  left: 0;
  display: block !important;
  width: 100% !important;
  z-index: 2; }

.has-error .bootstrap-select .dropdown-toggle,
.error .bootstrap-select .dropdown-toggle {
  border-color: #b94a48; }

.bootstrap-select.fit-width {
  width: auto !important; }

.bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
  width: 100%; }

.bootstrap-select.form-control {
  margin-bottom: 0;
  padding: 0;
  border: none; }

.bootstrap-select.form-control:not([class*="col-"]) {
  width: 100%; }

.bootstrap-select.form-control.input-group-btn {
  z-index: auto; }

.bootstrap-select.form-control.input-group-btn:not(:first-child):not(:last-child) > .btn {
  border-radius: 0; }

.bootstrap-select.btn-group:not(.input-group-btn),
.bootstrap-select.btn-group[class*="col-"] {
  float: none;
  display: inline-block;
  margin-left: 0; }

.bootstrap-select.btn-group.dropdown-menu-right,
.bootstrap-select.btn-group[class*="col-"].dropdown-menu-right,
.row .bootstrap-select.btn-group[class*="col-"].dropdown-menu-right {
  float: right; }

.form-inline .bootstrap-select.btn-group,
.form-horizontal .bootstrap-select.btn-group,
.form-group .bootstrap-select.btn-group {
  margin-bottom: 0; }

.form-group-lg .bootstrap-select.btn-group.form-control,
.form-group-sm .bootstrap-select.btn-group.form-control {
  padding: 0; }

.form-inline .bootstrap-select.btn-group .form-control {
  width: 100%; }

.bootstrap-select.btn-group .dropdown-menu li.disabled a:hover, .bootstrap-select.btn-group .dropdown-menu li.disabled a:focus {
  box-shadow: none; }

.bootstrap-select.btn-group.disabled,
.bootstrap-select.btn-group > .disabled {
  cursor: not-allowed; }

.bootstrap-select.btn-group.disabled:focus,
.bootstrap-select.btn-group > .disabled:focus {
  outline: none !important; }

.bootstrap-select.btn-group.bs-container {
  position: absolute;
  height: 0 !important;
  padding: 0 !important; }

.bootstrap-select.btn-group.bs-container .dropdown-menu {
  z-index: 1060; }

.bootstrap-select.btn-group .dropdown-toggle .filter-option {
  display: inline-block;
  overflow: hidden;
  width: 100%;
  text-align: left;
  text-overflow: ellipsis; }

.bootstrap-select.btn-group .dropdown-toggle .caret {
  position: absolute;
  top: 50%;
  right: 16px;
  margin-top: -2px;
  vertical-align: middle; }

.bootstrap-select.btn-group[class*="col-"] .dropdown-toggle {
  width: 100%; }

.bootstrap-select.btn-group .dropdown-menu {
  border-radius: 4px;
  padding: 0;
  min-width: 100%;
  box-sizing: border-box; }

.bootstrap-select.btn-group .dropdown-menu.inner {
  position: static;
  float: none;
  border: 0;
  padding: 5px 0;
  margin: 0;
  box-shadow: none; }

.bootstrap-select.btn-group .dropdown-menu li {
  position: relative; }

.bootstrap-select.btn-group .dropdown-menu li.active small {
  color: #fff; }

.bootstrap-select.btn-group .dropdown-menu li.disabled a {
  cursor: not-allowed; }

.bootstrap-select.btn-group .dropdown-menu li a {
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  outline: 0; }
  .bootstrap-select.btn-group .dropdown-menu li a:focus, .bootstrap-select.btn-group .dropdown-menu li a:hover {
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(156, 39, 176, 0.4); }

.bootstrap-select.btn-group .dropdown-menu li a.opt {
  position: relative;
  padding-left: 2.25em; }

.bootstrap-select.btn-group .dropdown-menu li a span.check-mark {
  display: none; }

.bootstrap-select.btn-group .dropdown-menu li a span.text {
  display: inline-block; }

.bootstrap-select.btn-group .dropdown-menu li small {
  padding-left: 0.5em; }

.bootstrap-select.btn-group .dropdown-menu .notify {
  position: absolute;
  bottom: 5px;
  width: 96%;
  margin: 0 2%;
  min-height: 26px;
  padding: 3px 5px;
  background: #f5f5f5;
  border: 1px solid #e3e3e3;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  pointer-events: none;
  opacity: 0.9;
  box-sizing: border-box; }

.bootstrap-select.btn-group .no-results {
  padding: 3px;
  background: #f5f5f5;
  margin: 0 5px;
  white-space: nowrap; }

.bootstrap-select.btn-group.fit-width .dropdown-toggle .filter-option {
  position: static; }

.bootstrap-select.btn-group.fit-width .dropdown-toggle .caret {
  position: static;
  top: auto;
  margin-top: -1px; }

.bootstrap-select.btn-group.show-tick .dropdown-menu li.selected a span.check-mark {
  position: absolute;
  display: inline-block;
  right: 15px;
  font-size: 12px;
  top: 12px; }

.bootstrap-select.btn-group.show-tick .dropdown-menu li a span.text {
  margin-right: 34px; }

.bootstrap-select.show-menu-arrow.open > .dropdown-toggle {
  z-index: 1061; }

.bootstrap-select.show-menu-arrow .dropdown-toggle:before {
  content: '';
  border-left: 7px solid transparent;
  border-right: 7px solid transparent;
  border-bottom: 7px solid rgba(204, 204, 204, 0.2);
  position: absolute;
  bottom: -4px;
  left: 9px;
  display: none; }

.bootstrap-select.show-menu-arrow .dropdown-toggle:after {
  content: '';
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-bottom: 6px solid white;
  position: absolute;
  bottom: -4px;
  left: 10px;
  display: none; }

.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle:before {
  bottom: auto;
  top: -3px;
  border-top: 7px solid rgba(204, 204, 204, 0.2);
  border-bottom: 0; }

.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle:after {
  bottom: auto;
  top: -3px;
  border-top: 6px solid white;
  border-bottom: 0; }

.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle:before {
  right: 12px;
  left: auto; }

.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle:after {
  right: 13px;
  left: auto; }

.bootstrap-select.show-menu-arrow.open > .dropdown-toggle:before,
.bootstrap-select.show-menu-arrow.open > .dropdown-toggle:after {
  display: block; }

.bs-searchbox,
.bs-actionsbox,
.bs-donebutton {
  padding: 4px 8px; }

.bs-actionsbox {
  width: 100%;
  box-sizing: border-box; }

.bs-actionsbox .btn-group button {
  width: 50%; }

.bs-donebutton {
  float: left;
  width: 100%;
  box-sizing: border-box; }

.bs-donebutton .btn-group button {
  width: 100%; }

.bs-searchbox + .bs-actionsbox {
  padding: 0 8px 4px; }

.bs-searchbox .form-control {
  margin-bottom: 0;
  width: 100%;
  float: none; }

.select-with-transition {
  border: 0 !important;
  background-image: linear-gradient(#9c27b0, #9c27b0), linear-gradient(#D2D2D2, #D2D2D2);
  background-size: 0 2px, 100% 1px;
  background-repeat: no-repeat;
  background-position: center bottom, center calc(100% - 1px);
  background-color: transparent !important;
  transition: background 0s ease-out !important;
  float: none !important;
  box-shadow: none !important;
  border-radius: 0 !important;
  color: #3C4858 !important;
  height: 34px;
  padding-left: 0 !important;
  padding-bottom: 5px !important; }
  .select-with-transition .caret,
  .select-with-transition .ripple-container {
    display: none; }

.btn-group.bootstrap-select.show-tick.open .select-with-transition {
  outline: none !important;
  background-image: linear-gradient(#9c27b0, #9c27b0), linear-gradient(#D2D2D2, #D2D2D2) !important;
  background-size: 100% 2px, 100% 1px !important;
  box-shadow: none;
  transition-duration: 0.3s !important; }

/* perfect-scrollbar v0.6.13 */
.ps-container {
  -ms-touch-action: auto;
  touch-action: auto;
  overflow: hidden !important;
  -ms-overflow-style: none; }

@supports (-ms-overflow-style: none) {
  .ps-container {
    overflow: auto !important; } }

@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
  .ps-container {
    overflow: auto !important; } }

.ps-container.ps-active-x > .ps-scrollbar-x-rail,
.ps-container.ps-active-y > .ps-scrollbar-y-rail {
  display: block;
  background-color: transparent; }

.ps-container.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail {
  background-color: #eee;
  opacity: 0.9; }

.ps-container.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail > .ps-scrollbar-x {
  background-color: #999;
  height: 11px; }

.ps-container.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail {
  background-color: #eee;
  opacity: 0.9; }

.ps-container.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail > .ps-scrollbar-y {
  background-color: #999;
  width: 11px; }

.ps-container > .ps-scrollbar-x-rail {
  display: none;
  position: absolute;
  /* please don't change 'position' */
  opacity: 0;
  transition: background-color .2s linear, opacity .2s linear;
  bottom: 0px;
  /* there must be 'bottom' for ps-scrollbar-x-rail */
  height: 15px; }

.ps-container > .ps-scrollbar-x-rail > .ps-scrollbar-x {
  position: absolute;
  /* please don't change 'position' */
  background-color: #aaa;
  border-radius: 6px;
  transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, border-radius .2s ease-in-out;
  bottom: 2px;
  /* there must be 'bottom' for ps-scrollbar-x */
  height: 6px; }

.ps-container > .ps-scrollbar-x-rail:hover > .ps-scrollbar-x, .ps-container > .ps-scrollbar-x-rail:active > .ps-scrollbar-x {
  height: 11px; }

.ps-container > .ps-scrollbar-y-rail {
  display: none;
  position: absolute;
  /* please don't change 'position' */
  opacity: 0;
  transition: background-color .2s linear, opacity .2s linear;
  right: 0;
  /* there must be 'right' for ps-scrollbar-y-rail */
  width: 15px; }

.ps-container > .ps-scrollbar-y-rail > .ps-scrollbar-y {
  position: absolute;
  /* please don't change 'position' */
  background-color: #aaa;
  border-radius: 6px;
  transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, border-radius .2s ease-in-out;
  right: 2px;
  /* there must be 'right' for ps-scrollbar-y */
  width: 6px; }

.ps-container > .ps-scrollbar-y-rail:hover > .ps-scrollbar-y, .ps-container > .ps-scrollbar-y-rail:active > .ps-scrollbar-y {
  width: 11px; }

.ps-container:hover.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail {
  background-color: #eee;
  opacity: 0.9; }

.ps-container:hover.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail > .ps-scrollbar-x {
  background-color: #999;
  height: 11px; }

.ps-container:hover.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail {
  background-color: #eee;
  opacity: 0.9; }

.ps-container:hover.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail > .ps-scrollbar-y {
  background-color: #999;
  width: 11px; }

.ps-container:hover > .ps-scrollbar-x-rail,
.ps-container:hover > .ps-scrollbar-y-rail {
  opacity: 0.6; }

.ps-container:hover > .ps-scrollbar-x-rail:hover {
  background-color: #eee;
  opacity: 0.9; }

.ps-container:hover > .ps-scrollbar-x-rail:hover > .ps-scrollbar-x {
  background-color: #999; }

.ps-container:hover > .ps-scrollbar-y-rail:hover {
  background-color: #eee;
  opacity: 0.9; }

.ps-container:hover > .ps-scrollbar-y-rail:hover > .ps-scrollbar-y {
  background-color: #999; }

html * {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale; }

h1, .h1 {
  font-size: 3.8em;
  line-height: 1.15em; }

h2, .h2 {
  font-size: 2.6em; }

h3, .h3 {
  font-size: 1.825em;
  line-height: 1.4em;
  margin: 20px 0 10px; }

h4, .h4 {
  font-size: 1.3em;
  line-height: 1.4em; }

h5, .h5 {
  font-size: 1.25em;
  line-height: 1.4em;
  margin-bottom: 15px; }

h6, .h6 {
  font-size: 1em;
  text-transform: uppercase;
  font-weight: 500; }

.title,
.title a,
.card-title,
.card-title a,
.info-title,
.info-title a,
.footer-brand,
.footer-brand a,
.footer-big h5,
.footer-big h5 a,
.footer-big h4,
.footer-big h4 a,
.media .media-heading,
.media .media-heading a {
  color: #3C4858;
  text-decoration: none; }

.card-blog .card-title {
  font-weight: 700; }

h2.title {
  margin-bottom: 30px; }

.description,
.card-description,
.footer-big p {
  color: #999999; }

.text-warning {
  color: #ff9800; }

.text-primary {
  color: #9c27b0; }

.text-danger {
  color: #f44336; }

.text-success {
  color: #4caf50; }

.text-info {
  color: #00bcd4; }

.text-rose {
  color: #e91e63; }

.text-gray {
  color: #999999; }

.wrapper {
  position: relative;
  top: 0;
  height: 100vh; }

.sidebar {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
  width: 260px;
  background: #FFFFFF;
  box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2); }
  .sidebar[data-background-color="black"] {
    background-color: #191919; }
  .sidebar .logo-img {
    width: 42px;
    max-height: 42px; }
    .sidebar .logo-img img {
      width: 42px;
      top: 16px;
      left: 18px;
      position: absolute; }
  .sidebar .sidebar-wrapper {
    position: relative;
    height: calc(100vh - 70px);
    overflow: auto;
    width: 260px;
    z-index: 4;
    padding-bottom: 30px; }
    .sidebar .sidebar-wrapper .dropdown .dropdown-backdrop {
      display: none !important; }
    .sidebar .sidebar-wrapper .navbar-form {
      border: none;
      box-shadow: none; }
    .sidebar .sidebar-wrapper .nav [data-toggle="collapse"] ~ div > ul > li > a span,
    .sidebar .sidebar-wrapper .user .info [data-toggle="collapse"] ~ div > ul > li > a span {
      display: inline-block; }
    .sidebar .sidebar-wrapper .nav [data-toggle="collapse"] ~ div > ul > li > a .sidebar-normal,
    .sidebar .sidebar-wrapper .user .info [data-toggle="collapse"] ~ div > ul > li > a .sidebar-normal {
      margin: 0;
      position: relative;
      -webkit-transform: translate3d(45px, 0, 0);
      transform: translate3d(45px, 0, 0);
      opacity: 1;
      white-space: nowrap;
      transition: opacity 300ms linear, -webkit-transform 300ms linear;
      transition: opacity 300ms linear, transform 300ms linear;
      transition: opacity 300ms linear, transform 300ms linear, -webkit-transform 300ms linear; }
    .sidebar .sidebar-wrapper .nav [data-toggle="collapse"] ~ div > ul > li > a .sidebar-mini,
    .sidebar .sidebar-wrapper .user .info [data-toggle="collapse"] ~ div > ul > li > a .sidebar-mini {
      text-transform: uppercase;
      width: 30px;
      text-align: center;
      letter-spacing: 1px;
      position: absolute;
      display: inherit; }
    .sidebar .sidebar-wrapper .nav [data-toggle="collapse"] ~ div > ul > li > a i,
    .sidebar .sidebar-wrapper .user .info [data-toggle="collapse"] ~ div > ul > li > a i {
      font-size: 17px;
      line-height: 20px;
      width: 26px; }
    .sidebar .sidebar-wrapper .user .info [data-toggle="collapse"] ~ div > ul > li > a .sidebar-normal {
      -webkit-transform: translate3d(45px, 0, 0);
      transform: translate3d(45px, 0, 0); }
  .sidebar .logo-tim {
    border-radius: 50%;
    border: 1px solid #333;
    display: block;
    height: 61px;
    width: 61px;
    float: left;
    overflow: hidden; }
    .sidebar .logo-tim img {
      width: 60px;
      height: 60px; }
  .sidebar .nav {
    padding-top: 15px; }
    .sidebar .nav .caret {
      margin-top: 13px;
      position: absolute;
      right: 18px; }
    .sidebar .nav li > a {
      margin: 10px 15px 0;
      border-radius: 3px;
      color: #3C4858;
      padding-left: 10px;
      padding-right: 10px; }
      .sidebar .nav li > a:hover, .sidebar .nav li > a:focus {
        background-color: transparent;
        outline: none; }
    .sidebar .nav li:first-child > a {
      margin: 0 15px; }
    .sidebar .nav li:hover > a,
    .sidebar .nav li.active > [data-toggle="collapse"] {
      background-color: rgba(200, 200, 200, 0.2);
      color: #3C4858;
      box-shadow: none; }
    .sidebar .nav li.active > [data-toggle="collapse"] i {
      color: #a9afbb; }
    .sidebar .nav li.active > a,
    .sidebar .nav li.active > a i {
      color: #FFFFFF; }
    .sidebar .nav li.separator {
      margin: 15px 0; }
      .sidebar .nav li.separator:after {
        width: calc(100% - 30px);
        content: "";
        position: absolute;
        height: 1px;
        left: 15px;
        background-color: rgba(180, 180, 180, 0.3); }
      .sidebar .nav li.separator + li {
        margin-top: 31px; }
    .sidebar .nav p {
      margin: 0;
      line-height: 30px;
      font-size: 14px;
      white-space: nowrap;
      opacity: 1;
      display: block;
      height: auto;
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
      transition: opacity 300ms linear, -webkit-transform 300ms linear;
      transition: opacity 300ms linear, transform 300ms linear;
      transition: opacity 300ms linear, transform 300ms linear, -webkit-transform 300ms linear; }
    .sidebar .nav i {
      font-size: 24px;
      float: left;
      margin-right: 15px;
      line-height: 30px;
      width: 30px;
      text-align: center;
      color: #a9afbb; }
  .sidebar .sidebar-background {
    position: absolute;
    z-index: 1;
    height: 100%;
    width: 100%;
    display: block;
    top: 0;
    left: 0;
    background-size: cover;
    background-position: center center; }
    .sidebar .sidebar-background:after {
      position: absolute;
      z-index: 3;
      width: 100%;
      height: 100%;
      content: "";
      display: block;
      background: #FFFFFF;
      opacity: .93; }
  .sidebar .logo {
    padding: 15px 0px;
    margin: 0;
    display: block;
    position: relative;
    z-index: 4; }
    .sidebar .logo:after {
      content: '';
      position: absolute;
      bottom: 0;
      right: 15px;
      height: 1px;
      width: calc(100% - 30px);
      background-color: rgba(180, 180, 180, 0.3); }
    .sidebar .logo p {
      float: left;
      font-size: 20px;
      margin: 10px 10px;
      color: #FFFFFF;
      line-height: 20px; }
    .sidebar .logo .simple-text {
      text-transform: uppercase;
      padding: 5px 0px;
      display: block;
      font-size: 18px;
      color: #3C4858;
      text-align: center;
      white-space: nowrap;
      font-weight: 400;
      line-height: 30px;
      overflow: hidden; }
  .sidebar .logo-tim {
    border-radius: 50%;
    border: 1px solid #333;
    display: block;
    height: 61px;
    width: 61px;
    float: left;
    overflow: hidden; }
    .sidebar .logo-tim img {
      width: 60px;
      height: 60px; }
  .sidebar .user {
    padding-bottom: 20px;
    margin: 20px auto 0;
    position: relative; }
    .sidebar .user:after {
      content: '';
      position: absolute;
      bottom: 0;
      right: 15px;
      height: 1px;
      width: calc(100% - 30px);
      background-color: rgba(180, 180, 180, 0.3); }
    .sidebar .user .photo {
      width: 34px;
      height: 34px;
      overflow: hidden;
      border-radius: 50%;
      position: absolute;
      left: 23px;
      z-index: 5;
      box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2); }
      .sidebar .user .photo img {
        width: 100%; }
    .sidebar .user a {
      color: #3C4858;
      padding: 6px 10px;
      display: block;
      white-space: nowrap; }
    .sidebar .user .info .caret {
      position: absolute;
      top: 16px;
      right: 26px; }
    .sidebar .user .info > a {
      padding-left: 70px; }
  .sidebar[data-background-color="black"] {
    background-color: #191919; }
    .sidebar[data-background-color="black"] .nav li > a {
      color: #FFFFFF; }
    .sidebar[data-background-color="black"] .nav li i {
      color: rgba(255, 255, 255, 0.8); }
    .sidebar[data-background-color="black"] .nav li.active > [data-toggle="collapse"], .sidebar[data-background-color="black"] .nav li:hover > [data-toggle="collapse"] {
      color: #FFFFFF; }
      .sidebar[data-background-color="black"] .nav li.active > [data-toggle="collapse"] i, .sidebar[data-background-color="black"] .nav li:hover > [data-toggle="collapse"] i {
        color: rgba(255, 255, 255, 0.8); }
    .sidebar[data-background-color="black"] .user a {
      color: #FFFFFF; }
    .sidebar[data-background-color="black"] .simple-text {
      color: #FFFFFF; }
    .sidebar[data-background-color="black"] .sidebar-background:after {
      background: #000;
      opacity: .8; }
  .sidebar[data-background-color="red"] {
    background-color: #e53935; }
    .sidebar[data-background-color="red"] .nav li > a {
      color: #FFFFFF; }
    .sidebar[data-background-color="red"] .nav li i {
      color: rgba(255, 255, 255, 0.8); }
    .sidebar[data-background-color="red"] .nav li.active > [data-toggle="collapse"], .sidebar[data-background-color="red"] .nav li:hover > [data-toggle="collapse"] {
      color: #FFFFFF; }
      .sidebar[data-background-color="red"] .nav li.active > [data-toggle="collapse"] i, .sidebar[data-background-color="red"] .nav li:hover > [data-toggle="collapse"] i {
        color: rgba(255, 255, 255, 0.8); }
    .sidebar[data-background-color="red"] .user a {
      color: #FFFFFF; }
    .sidebar[data-background-color="red"] .simple-text {
      color: #FFFFFF; }
    .sidebar[data-background-color="red"] .sidebar-background:after {
      background: #d50000;
      opacity: .8; }
    .sidebar[data-background-color="red"] .user:after,
    .sidebar[data-background-color="red"] .logo:after,
    .sidebar[data-background-color="red"] .nav li.separator:after {
      background-color: rgba(255, 255, 255, 0.3); }
    .sidebar[data-background-color="red"] .nav li:hover:not(.active) > a,
    .sidebar[data-background-color="red"] .nav li.active > [data-toggle="collapse"] {
      background-color: rgba(255, 255, 255, 0.1); }
  .sidebar[data-active-color="purple"] li.active > a {
    background-color: #9c27b0;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(156, 39, 176, 0.4); }
  .sidebar[data-active-color="blue"] li.active > a {
    background-color: #00bcd4;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(0, 188, 212, 0.4); }
  .sidebar[data-active-color="green"] li.active > a {
    background-color: #4caf50;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(76, 175, 80, 0.4); }
  .sidebar[data-active-color="orange"] li.active > a {
    background-color: #ff9800;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 152, 0, 0.4); }
  .sidebar[data-active-color="red"] li.active > a {
    background-color: #f44336;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(244, 67, 54, 0.4); }
  .sidebar[data-active-color="rose"] li.active > a {
    background-color: #e91e63;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(233, 30, 99, 0.4); }
  .sidebar[data-active-color="white"] li.active > a {
    background-color: #FFFFFF;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 255, 255, 0.4); }
  .sidebar[data-active-color="white"] .nav li.active > a:not([data-toggle="collapse"]) {
    color: #3C4858;
    opacity: 1;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(60, 72, 88, 0.4); }
    .sidebar[data-active-color="white"] .nav li.active > a:not([data-toggle="collapse"]) i {
      color: rgba(60, 72, 88, 0.8); }
  .sidebar[data-active-color="white"] .sidebar-moving-tab {
    color: #3C4858;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(60, 72, 88, 0.4); }
    .sidebar[data-active-color="white"] .sidebar-moving-tab i {
      color: rgba(60, 72, 88, 0.8); }
  .sidebar[data-image]:after, .sidebar.has-image:after {
    opacity: .77; }

.main-panel {
  position: relative;
  float: right;
  overflow: auto;
  width: calc(100% - 260px);
  min-height: 100%;
  transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1); }
  .main-panel .main-content {
    margin-top: 70px;
    padding: 30px 15px;
    min-height: calc(100vh - 123px); }
    .main-panel .main-content .container-fluid h3:first-child {
      margin-top: 0; }
  .main-panel > .footer {
    border-top: 1px solid #e7e7e7; }
  .main-panel > .navbar {
    margin-bottom: 0; }
  .main-panel .header {
    margin-bottom: 30px; }
    .main-panel .header .title {
      margin-top: 10px; }

.main-panel {
  max-height: 100%;
  height: 100%; }

.sidebar,
.main-panel,
.sidebar-wrapper {
  transition-property: top,bottom, width;
  transition-duration: .2s,.2s, .35s;
  transition-timing-function: linear,linear,ease;
  -webkit-overflow-scrolling: touch; }

.perfect-scrollbar-on .sidebar .sidebar-wrapper, .sidebar .sidebar-wrapper, .perfect-scrollbar-on
.main-panel,
.main-panel {
  overflow: hidden; }

.perfect-scrollbar-off .sidebar .sidebar-wrapper,
.perfect-scrollbar-off .main-panel {
  overflow: auto; }

.visible-on-sidebar-regular {
  display: inline-block !important; }

.visible-on-sidebar-mini {
  display: none !important; }

@media (min-width: 992px) {
  .sidebar-mini .visible-on-sidebar-regular {
    display: none !important; }
  .sidebar-mini .visible-on-sidebar-mini {
    display: inline-block !important; }
  .sidebar-mini [data-background-color="black"] .nav .collapse li:not(.active) > a,
  .sidebar-mini [data-background-color="black"] .user .collapse li:not(.active) > a {
    color: #3C4858; }
  .sidebar-mini .sidebar-moving-tab {
    width: 50px; }
    .sidebar-mini .sidebar-moving-tab.moving .sidebar-normal,
    .sidebar-mini .sidebar-moving-tab.moving p {
      display: none; }
    .sidebar-mini .sidebar-moving-tab.moving .sidebar-mini {
      position: relative; }
  .sidebar-mini .sidebar {
    width: 80px; }
    .sidebar-mini .sidebar .sidebar-wrapper {
      width: 80px; }
      .sidebar-mini .sidebar .sidebar-wrapper .nav li > a p {
        opacity: 0;
        -webkit-transform: translate3d(-25px, 0, 0);
        transform: translate3d(-25px, 0, 0); }
      .sidebar-mini .sidebar .sidebar-wrapper .nav [data-toggle="collapse"] ~ div > ul > li > a .sidebar-normal,
      .sidebar-mini .sidebar .sidebar-wrapper .user .info [data-toggle="collapse"] ~ div > ul > li > a .sidebar-normal {
        -webkit-transform: translate3d(15px, 0, 0);
        transform: translate3d(15px, 0, 0);
        opacity: 0; }
      .sidebar-mini .sidebar .sidebar-wrapper .user .info [data-toggle="collapse"] ~ div > ul > li > a .sidebar-normal {
        -webkit-transform: translate3d(25px, 0, 0);
        transform: translate3d(25px, 0, 0); }
    .sidebar-mini .sidebar .user .info > a {
      line-height: 21px;
      padding-left: 45px;
      opacity: 0; }
    .sidebar-mini .sidebar .logo .logo-normal a {
      opacity: 0;
      text-align: center;
      position: relative;
      padding-left: 40px; }
  .sidebar-mini .main-panel {
    width: calc(100% - 80px);
    margin-left: 80px; }
  .sidebar-mini .sidebar:hover {
    width: 260px !important; }
    .sidebar-mini .sidebar:hover .sidebar-moving-tab {
      width: 230px; }
      .sidebar-mini .sidebar:hover .sidebar-moving-tab.moving .sidebar-normal,
      .sidebar-mini .sidebar:hover .sidebar-moving-tab.moving p {
        display: block; }
      .sidebar-mini .sidebar:hover .sidebar-moving-tab.moving .sidebar-mini {
        position: absolute; }
    .sidebar-mini .sidebar:hover .sidebar-wrapper {
      width: 260px !important; }
      .sidebar-mini .sidebar:hover .sidebar-wrapper .nav li > a p {
        opacity: 1;
        -webkit-transform: translate3d(0px, 0, 0);
        transform: translate3d(0px, 0, 0); }
      .sidebar-mini .sidebar:hover .sidebar-wrapper .nav [data-toggle="collapse"] ~ div > ul > li > a .sidebar-normal {
        -webkit-transform: translate3d(45px, 0, 0);
        transform: translate3d(45px, 0, 0);
        opacity: 1; }
      .sidebar-mini .sidebar:hover .sidebar-wrapper .user {
        padding-bottom: 20px;
        height: auto; }
        .sidebar-mini .sidebar:hover .sidebar-wrapper .user .info > a {
          padding-left: 70px;
          opacity: 1; }
        .sidebar-mini .sidebar:hover .sidebar-wrapper .user .info [data-toggle="collapse"] ~ div > ul > li > a .sidebar-normal {
          opacity: 1;
          -webkit-transform: translateX(45px);
                  transform: translateX(45px); }
    .sidebar-mini .sidebar:hover .logo .logo-normal a {
      opacity: 1;
      padding-left: 0; }
    .sidebar-mini .sidebar:hover .logo .logo-mini {
      position: absolute;
      top: 18px;
      opacity: 0; } }

.hide-sidebar .sidebar {
  -webkit-transform: translate3d(-260px, 0, 0);
  transform: translate3d(-260px, 0, 0); }

.hide-sidebar .main-panel {
  width: 100%; }

.hide-sidebar.sidebar-mini .sidebar {
  -webkit-transform: translate3d(-80px, 0, 0);
  transform: translate3d(-80px, 0, 0); }

.btn,
.navbar .navbar-nav > li > a.btn {
  border: none;
  border-radius: 3px;
  position: relative;
  padding: 12px 30px;
  margin: 10px 1px;
  font-size: 12px;
  font-weight: 400;
  text-transform: uppercase;
  letter-spacing: 0;
  will-change: box-shadow, transform;
  transition: box-shadow 0.2s cubic-bezier(0.4, 0, 1, 1), background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1); }
  .btn::-moz-focus-inner,
  .navbar .navbar-nav > li > a.btn::-moz-focus-inner {
    border: 0; }
  .btn, .btn.btn-default,
  .navbar .navbar-nav > li > a.btn,
  .navbar .navbar-nav > li > a.btn.btn-default {
    box-shadow: 0 2px 2px 0 rgba(153, 153, 153, 0.14), 0 3px 1px -2px rgba(153, 153, 153, 0.2), 0 1px 5px 0 rgba(153, 153, 153, 0.12); }
    .btn, .btn:hover, .btn:focus, .btn:active, .btn.active, .btn:active:focus, .btn:active:hover, .btn.active:focus, .btn.active:hover,
    .open > .btn.dropdown-toggle,
    .open > .btn.dropdown-toggle:focus,
    .open > .btn.dropdown-toggle:hover, .btn.btn-default, .btn.btn-default:hover, .btn.btn-default:focus, .btn.btn-default:active, .btn.btn-default.active, .btn.btn-default:active:focus, .btn.btn-default:active:hover, .btn.btn-default.active:focus, .btn.btn-default.active:hover,
    .open > .btn.btn-default.dropdown-toggle,
    .open > .btn.btn-default.dropdown-toggle:focus,
    .open > .btn.btn-default.dropdown-toggle:hover,
    .navbar .navbar-nav > li > a.btn,
    .navbar .navbar-nav > li > a.btn:hover,
    .navbar .navbar-nav > li > a.btn:focus,
    .navbar .navbar-nav > li > a.btn:active,
    .navbar .navbar-nav > li > a.btn.active,
    .navbar .navbar-nav > li > a.btn:active:focus,
    .navbar .navbar-nav > li > a.btn:active:hover,
    .navbar .navbar-nav > li > a.btn.active:focus,
    .navbar .navbar-nav > li > a.btn.active:hover,
    .open >
    .navbar .navbar-nav > li > a.btn.dropdown-toggle,
    .open >
    .navbar .navbar-nav > li > a.btn.dropdown-toggle:focus,
    .open >
    .navbar .navbar-nav > li > a.btn.dropdown-toggle:hover,
    .navbar .navbar-nav > li > a.btn.btn-default,
    .navbar .navbar-nav > li > a.btn.btn-default:hover,
    .navbar .navbar-nav > li > a.btn.btn-default:focus,
    .navbar .navbar-nav > li > a.btn.btn-default:active,
    .navbar .navbar-nav > li > a.btn.btn-default.active,
    .navbar .navbar-nav > li > a.btn.btn-default:active:focus,
    .navbar .navbar-nav > li > a.btn.btn-default:active:hover,
    .navbar .navbar-nav > li > a.btn.btn-default.active:focus,
    .navbar .navbar-nav > li > a.btn.btn-default.active:hover,
    .open >
    .navbar .navbar-nav > li > a.btn.btn-default.dropdown-toggle,
    .open >
    .navbar .navbar-nav > li > a.btn.btn-default.dropdown-toggle:focus,
    .open >
    .navbar .navbar-nav > li > a.btn.btn-default.dropdown-toggle:hover {
      background-color: #999999;
      color: #FFFFFF; }
    .btn:focus, .btn:active, .btn:hover, .btn.btn-default:focus, .btn.btn-default:active, .btn.btn-default:hover,
    .navbar .navbar-nav > li > a.btn:focus,
    .navbar .navbar-nav > li > a.btn:active,
    .navbar .navbar-nav > li > a.btn:hover,
    .navbar .navbar-nav > li > a.btn.btn-default:focus,
    .navbar .navbar-nav > li > a.btn.btn-default:active,
    .navbar .navbar-nav > li > a.btn.btn-default:hover {
      box-shadow: 0 14px 26px -12px rgba(153, 153, 153, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(153, 153, 153, 0.2); }
    .btn.disabled, .btn.disabled:hover, .btn.disabled:focus, .btn.disabled.focus, .btn.disabled:active, .btn.disabled.active, .btn:disabled, .btn:disabled:hover, .btn:disabled:focus, .btn:disabled.focus, .btn:disabled:active, .btn:disabled.active, .btn[disabled], .btn[disabled]:hover, .btn[disabled]:focus, .btn[disabled].focus, .btn[disabled]:active, .btn[disabled].active,
    fieldset[disabled] .btn,
    fieldset[disabled] .btn:hover,
    fieldset[disabled] .btn:focus,
    fieldset[disabled] .btn.focus,
    fieldset[disabled] .btn:active,
    fieldset[disabled] .btn.active, .btn.btn-default.disabled, .btn.btn-default.disabled:hover, .btn.btn-default.disabled:focus, .btn.btn-default.disabled.focus, .btn.btn-default.disabled:active, .btn.btn-default.disabled.active, .btn.btn-default:disabled, .btn.btn-default:disabled:hover, .btn.btn-default:disabled:focus, .btn.btn-default:disabled.focus, .btn.btn-default:disabled:active, .btn.btn-default:disabled.active, .btn.btn-default[disabled], .btn.btn-default[disabled]:hover, .btn.btn-default[disabled]:focus, .btn.btn-default[disabled].focus, .btn.btn-default[disabled]:active, .btn.btn-default[disabled].active,
    fieldset[disabled] .btn.btn-default,
    fieldset[disabled] .btn.btn-default:hover,
    fieldset[disabled] .btn.btn-default:focus,
    fieldset[disabled] .btn.btn-default.focus,
    fieldset[disabled] .btn.btn-default:active,
    fieldset[disabled] .btn.btn-default.active,
    .navbar .navbar-nav > li > a.btn.disabled,
    .navbar .navbar-nav > li > a.btn.disabled:hover,
    .navbar .navbar-nav > li > a.btn.disabled:focus,
    .navbar .navbar-nav > li > a.btn.disabled.focus,
    .navbar .navbar-nav > li > a.btn.disabled:active,
    .navbar .navbar-nav > li > a.btn.disabled.active,
    .navbar .navbar-nav > li > a.btn:disabled,
    .navbar .navbar-nav > li > a.btn:disabled:hover,
    .navbar .navbar-nav > li > a.btn:disabled:focus,
    .navbar .navbar-nav > li > a.btn:disabled.focus,
    .navbar .navbar-nav > li > a.btn:disabled:active,
    .navbar .navbar-nav > li > a.btn:disabled.active,
    .navbar .navbar-nav > li > a.btn[disabled],
    .navbar .navbar-nav > li > a.btn[disabled]:hover,
    .navbar .navbar-nav > li > a.btn[disabled]:focus,
    .navbar .navbar-nav > li > a.btn[disabled].focus,
    .navbar .navbar-nav > li > a.btn[disabled]:active,
    .navbar .navbar-nav > li > a.btn[disabled].active,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn:hover,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn:focus,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.focus,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn:active,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.active,
    .navbar .navbar-nav > li > a.btn.btn-default.disabled,
    .navbar .navbar-nav > li > a.btn.btn-default.disabled:hover,
    .navbar .navbar-nav > li > a.btn.btn-default.disabled:focus,
    .navbar .navbar-nav > li > a.btn.btn-default.disabled.focus,
    .navbar .navbar-nav > li > a.btn.btn-default.disabled:active,
    .navbar .navbar-nav > li > a.btn.btn-default.disabled.active,
    .navbar .navbar-nav > li > a.btn.btn-default:disabled,
    .navbar .navbar-nav > li > a.btn.btn-default:disabled:hover,
    .navbar .navbar-nav > li > a.btn.btn-default:disabled:focus,
    .navbar .navbar-nav > li > a.btn.btn-default:disabled.focus,
    .navbar .navbar-nav > li > a.btn.btn-default:disabled:active,
    .navbar .navbar-nav > li > a.btn.btn-default:disabled.active,
    .navbar .navbar-nav > li > a.btn.btn-default[disabled],
    .navbar .navbar-nav > li > a.btn.btn-default[disabled]:hover,
    .navbar .navbar-nav > li > a.btn.btn-default[disabled]:focus,
    .navbar .navbar-nav > li > a.btn.btn-default[disabled].focus,
    .navbar .navbar-nav > li > a.btn.btn-default[disabled]:active,
    .navbar .navbar-nav > li > a.btn.btn-default[disabled].active,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-default,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-default:hover,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-default:focus,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-default.focus,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-default:active,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-default.active {
      box-shadow: none; }
    .btn.btn-simple, .btn.btn-default.btn-simple,
    .navbar .navbar-nav > li > a.btn.btn-simple,
    .navbar .navbar-nav > li > a.btn.btn-default.btn-simple {
      background-color: transparent;
      color: #999999;
      box-shadow: none; }
      .btn.btn-simple:hover, .btn.btn-simple:focus, .btn.btn-simple:active, .btn.btn-default.btn-simple:hover, .btn.btn-default.btn-simple:focus, .btn.btn-default.btn-simple:active,
      .navbar .navbar-nav > li > a.btn.btn-simple:hover,
      .navbar .navbar-nav > li > a.btn.btn-simple:focus,
      .navbar .navbar-nav > li > a.btn.btn-simple:active,
      .navbar .navbar-nav > li > a.btn.btn-default.btn-simple:hover,
      .navbar .navbar-nav > li > a.btn.btn-default.btn-simple:focus,
      .navbar .navbar-nav > li > a.btn.btn-default.btn-simple:active {
        background-color: transparent;
        color: #999999; }
  .btn.btn-primary,
  .navbar .navbar-nav > li > a.btn.btn-primary {
    box-shadow: 0 2px 2px 0 rgba(156, 39, 176, 0.14), 0 3px 1px -2px rgba(156, 39, 176, 0.2), 0 1px 5px 0 rgba(156, 39, 176, 0.12); }
    .btn.btn-primary, .btn.btn-primary:hover, .btn.btn-primary:focus, .btn.btn-primary:active, .btn.btn-primary.active, .btn.btn-primary:active:focus, .btn.btn-primary:active:hover, .btn.btn-primary.active:focus, .btn.btn-primary.active:hover,
    .open > .btn.btn-primary.dropdown-toggle,
    .open > .btn.btn-primary.dropdown-toggle:focus,
    .open > .btn.btn-primary.dropdown-toggle:hover,
    .navbar .navbar-nav > li > a.btn.btn-primary,
    .navbar .navbar-nav > li > a.btn.btn-primary:hover,
    .navbar .navbar-nav > li > a.btn.btn-primary:focus,
    .navbar .navbar-nav > li > a.btn.btn-primary:active,
    .navbar .navbar-nav > li > a.btn.btn-primary.active,
    .navbar .navbar-nav > li > a.btn.btn-primary:active:focus,
    .navbar .navbar-nav > li > a.btn.btn-primary:active:hover,
    .navbar .navbar-nav > li > a.btn.btn-primary.active:focus,
    .navbar .navbar-nav > li > a.btn.btn-primary.active:hover,
    .open >
    .navbar .navbar-nav > li > a.btn.btn-primary.dropdown-toggle,
    .open >
    .navbar .navbar-nav > li > a.btn.btn-primary.dropdown-toggle:focus,
    .open >
    .navbar .navbar-nav > li > a.btn.btn-primary.dropdown-toggle:hover {
      background-color: #9c27b0;
      color: #FFFFFF; }
    .btn.btn-primary:focus, .btn.btn-primary:active, .btn.btn-primary:hover,
    .navbar .navbar-nav > li > a.btn.btn-primary:focus,
    .navbar .navbar-nav > li > a.btn.btn-primary:active,
    .navbar .navbar-nav > li > a.btn.btn-primary:hover {
      box-shadow: 0 14px 26px -12px rgba(156, 39, 176, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(156, 39, 176, 0.2); }
    .btn.btn-primary.disabled, .btn.btn-primary.disabled:hover, .btn.btn-primary.disabled:focus, .btn.btn-primary.disabled.focus, .btn.btn-primary.disabled:active, .btn.btn-primary.disabled.active, .btn.btn-primary:disabled, .btn.btn-primary:disabled:hover, .btn.btn-primary:disabled:focus, .btn.btn-primary:disabled.focus, .btn.btn-primary:disabled:active, .btn.btn-primary:disabled.active, .btn.btn-primary[disabled], .btn.btn-primary[disabled]:hover, .btn.btn-primary[disabled]:focus, .btn.btn-primary[disabled].focus, .btn.btn-primary[disabled]:active, .btn.btn-primary[disabled].active,
    fieldset[disabled] .btn.btn-primary,
    fieldset[disabled] .btn.btn-primary:hover,
    fieldset[disabled] .btn.btn-primary:focus,
    fieldset[disabled] .btn.btn-primary.focus,
    fieldset[disabled] .btn.btn-primary:active,
    fieldset[disabled] .btn.btn-primary.active,
    .navbar .navbar-nav > li > a.btn.btn-primary.disabled,
    .navbar .navbar-nav > li > a.btn.btn-primary.disabled:hover,
    .navbar .navbar-nav > li > a.btn.btn-primary.disabled:focus,
    .navbar .navbar-nav > li > a.btn.btn-primary.disabled.focus,
    .navbar .navbar-nav > li > a.btn.btn-primary.disabled:active,
    .navbar .navbar-nav > li > a.btn.btn-primary.disabled.active,
    .navbar .navbar-nav > li > a.btn.btn-primary:disabled,
    .navbar .navbar-nav > li > a.btn.btn-primary:disabled:hover,
    .navbar .navbar-nav > li > a.btn.btn-primary:disabled:focus,
    .navbar .navbar-nav > li > a.btn.btn-primary:disabled.focus,
    .navbar .navbar-nav > li > a.btn.btn-primary:disabled:active,
    .navbar .navbar-nav > li > a.btn.btn-primary:disabled.active,
    .navbar .navbar-nav > li > a.btn.btn-primary[disabled],
    .navbar .navbar-nav > li > a.btn.btn-primary[disabled]:hover,
    .navbar .navbar-nav > li > a.btn.btn-primary[disabled]:focus,
    .navbar .navbar-nav > li > a.btn.btn-primary[disabled].focus,
    .navbar .navbar-nav > li > a.btn.btn-primary[disabled]:active,
    .navbar .navbar-nav > li > a.btn.btn-primary[disabled].active,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-primary,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-primary:hover,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-primary:focus,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-primary.focus,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-primary:active,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-primary.active {
      box-shadow: none; }
    .btn.btn-primary.btn-simple,
    .navbar .navbar-nav > li > a.btn.btn-primary.btn-simple {
      background-color: transparent;
      color: #9c27b0;
      box-shadow: none; }
      .btn.btn-primary.btn-simple:hover, .btn.btn-primary.btn-simple:focus, .btn.btn-primary.btn-simple:active,
      .navbar .navbar-nav > li > a.btn.btn-primary.btn-simple:hover,
      .navbar .navbar-nav > li > a.btn.btn-primary.btn-simple:focus,
      .navbar .navbar-nav > li > a.btn.btn-primary.btn-simple:active {
        background-color: transparent;
        color: #9c27b0; }
  .btn.btn-info,
  .navbar .navbar-nav > li > a.btn.btn-info {
    box-shadow: 0 2px 2px 0 rgba(0, 188, 212, 0.14), 0 3px 1px -2px rgba(0, 188, 212, 0.2), 0 1px 5px 0 rgba(0, 188, 212, 0.12); }
    .btn.btn-info, .btn.btn-info:hover, .btn.btn-info:focus, .btn.btn-info:active, .btn.btn-info.active, .btn.btn-info:active:focus, .btn.btn-info:active:hover, .btn.btn-info.active:focus, .btn.btn-info.active:hover,
    .open > .btn.btn-info.dropdown-toggle,
    .open > .btn.btn-info.dropdown-toggle:focus,
    .open > .btn.btn-info.dropdown-toggle:hover,
    .navbar .navbar-nav > li > a.btn.btn-info,
    .navbar .navbar-nav > li > a.btn.btn-info:hover,
    .navbar .navbar-nav > li > a.btn.btn-info:focus,
    .navbar .navbar-nav > li > a.btn.btn-info:active,
    .navbar .navbar-nav > li > a.btn.btn-info.active,
    .navbar .navbar-nav > li > a.btn.btn-info:active:focus,
    .navbar .navbar-nav > li > a.btn.btn-info:active:hover,
    .navbar .navbar-nav > li > a.btn.btn-info.active:focus,
    .navbar .navbar-nav > li > a.btn.btn-info.active:hover,
    .open >
    .navbar .navbar-nav > li > a.btn.btn-info.dropdown-toggle,
    .open >
    .navbar .navbar-nav > li > a.btn.btn-info.dropdown-toggle:focus,
    .open >
    .navbar .navbar-nav > li > a.btn.btn-info.dropdown-toggle:hover {
      background-color: #00bcd4;
      color: #FFFFFF; }
    .btn.btn-info:focus, .btn.btn-info:active, .btn.btn-info:hover,
    .navbar .navbar-nav > li > a.btn.btn-info:focus,
    .navbar .navbar-nav > li > a.btn.btn-info:active,
    .navbar .navbar-nav > li > a.btn.btn-info:hover {
      box-shadow: 0 14px 26px -12px rgba(0, 188, 212, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 188, 212, 0.2); }
    .btn.btn-info.disabled, .btn.btn-info.disabled:hover, .btn.btn-info.disabled:focus, .btn.btn-info.disabled.focus, .btn.btn-info.disabled:active, .btn.btn-info.disabled.active, .btn.btn-info:disabled, .btn.btn-info:disabled:hover, .btn.btn-info:disabled:focus, .btn.btn-info:disabled.focus, .btn.btn-info:disabled:active, .btn.btn-info:disabled.active, .btn.btn-info[disabled], .btn.btn-info[disabled]:hover, .btn.btn-info[disabled]:focus, .btn.btn-info[disabled].focus, .btn.btn-info[disabled]:active, .btn.btn-info[disabled].active,
    fieldset[disabled] .btn.btn-info,
    fieldset[disabled] .btn.btn-info:hover,
    fieldset[disabled] .btn.btn-info:focus,
    fieldset[disabled] .btn.btn-info.focus,
    fieldset[disabled] .btn.btn-info:active,
    fieldset[disabled] .btn.btn-info.active,
    .navbar .navbar-nav > li > a.btn.btn-info.disabled,
    .navbar .navbar-nav > li > a.btn.btn-info.disabled:hover,
    .navbar .navbar-nav > li > a.btn.btn-info.disabled:focus,
    .navbar .navbar-nav > li > a.btn.btn-info.disabled.focus,
    .navbar .navbar-nav > li > a.btn.btn-info.disabled:active,
    .navbar .navbar-nav > li > a.btn.btn-info.disabled.active,
    .navbar .navbar-nav > li > a.btn.btn-info:disabled,
    .navbar .navbar-nav > li > a.btn.btn-info:disabled:hover,
    .navbar .navbar-nav > li > a.btn.btn-info:disabled:focus,
    .navbar .navbar-nav > li > a.btn.btn-info:disabled.focus,
    .navbar .navbar-nav > li > a.btn.btn-info:disabled:active,
    .navbar .navbar-nav > li > a.btn.btn-info:disabled.active,
    .navbar .navbar-nav > li > a.btn.btn-info[disabled],
    .navbar .navbar-nav > li > a.btn.btn-info[disabled]:hover,
    .navbar .navbar-nav > li > a.btn.btn-info[disabled]:focus,
    .navbar .navbar-nav > li > a.btn.btn-info[disabled].focus,
    .navbar .navbar-nav > li > a.btn.btn-info[disabled]:active,
    .navbar .navbar-nav > li > a.btn.btn-info[disabled].active,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-info,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-info:hover,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-info:focus,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-info.focus,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-info:active,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-info.active {
      box-shadow: none; }
    .btn.btn-info.btn-simple,
    .navbar .navbar-nav > li > a.btn.btn-info.btn-simple {
      background-color: transparent;
      color: #00bcd4;
      box-shadow: none; }
      .btn.btn-info.btn-simple:hover, .btn.btn-info.btn-simple:focus, .btn.btn-info.btn-simple:active,
      .navbar .navbar-nav > li > a.btn.btn-info.btn-simple:hover,
      .navbar .navbar-nav > li > a.btn.btn-info.btn-simple:focus,
      .navbar .navbar-nav > li > a.btn.btn-info.btn-simple:active {
        background-color: transparent;
        color: #00bcd4; }
  .btn.btn-success,
  .navbar .navbar-nav > li > a.btn.btn-success {
    box-shadow: 0 2px 2px 0 rgba(76, 175, 80, 0.14), 0 3px 1px -2px rgba(76, 175, 80, 0.2), 0 1px 5px 0 rgba(76, 175, 80, 0.12); }
    .btn.btn-success, .btn.btn-success:hover, .btn.btn-success:focus, .btn.btn-success:active, .btn.btn-success.active, .btn.btn-success:active:focus, .btn.btn-success:active:hover, .btn.btn-success.active:focus, .btn.btn-success.active:hover,
    .open > .btn.btn-success.dropdown-toggle,
    .open > .btn.btn-success.dropdown-toggle:focus,
    .open > .btn.btn-success.dropdown-toggle:hover,
    .navbar .navbar-nav > li > a.btn.btn-success,
    .navbar .navbar-nav > li > a.btn.btn-success:hover,
    .navbar .navbar-nav > li > a.btn.btn-success:focus,
    .navbar .navbar-nav > li > a.btn.btn-success:active,
    .navbar .navbar-nav > li > a.btn.btn-success.active,
    .navbar .navbar-nav > li > a.btn.btn-success:active:focus,
    .navbar .navbar-nav > li > a.btn.btn-success:active:hover,
    .navbar .navbar-nav > li > a.btn.btn-success.active:focus,
    .navbar .navbar-nav > li > a.btn.btn-success.active:hover,
    .open >
    .navbar .navbar-nav > li > a.btn.btn-success.dropdown-toggle,
    .open >
    .navbar .navbar-nav > li > a.btn.btn-success.dropdown-toggle:focus,
    .open >
    .navbar .navbar-nav > li > a.btn.btn-success.dropdown-toggle:hover {
      background-color: #4caf50;
      color: #FFFFFF; }
    .btn.btn-success:focus, .btn.btn-success:active, .btn.btn-success:hover,
    .navbar .navbar-nav > li > a.btn.btn-success:focus,
    .navbar .navbar-nav > li > a.btn.btn-success:active,
    .navbar .navbar-nav > li > a.btn.btn-success:hover {
      box-shadow: 0 14px 26px -12px rgba(76, 175, 80, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(76, 175, 80, 0.2); }
    .btn.btn-success.disabled, .btn.btn-success.disabled:hover, .btn.btn-success.disabled:focus, .btn.btn-success.disabled.focus, .btn.btn-success.disabled:active, .btn.btn-success.disabled.active, .btn.btn-success:disabled, .btn.btn-success:disabled:hover, .btn.btn-success:disabled:focus, .btn.btn-success:disabled.focus, .btn.btn-success:disabled:active, .btn.btn-success:disabled.active, .btn.btn-success[disabled], .btn.btn-success[disabled]:hover, .btn.btn-success[disabled]:focus, .btn.btn-success[disabled].focus, .btn.btn-success[disabled]:active, .btn.btn-success[disabled].active,
    fieldset[disabled] .btn.btn-success,
    fieldset[disabled] .btn.btn-success:hover,
    fieldset[disabled] .btn.btn-success:focus,
    fieldset[disabled] .btn.btn-success.focus,
    fieldset[disabled] .btn.btn-success:active,
    fieldset[disabled] .btn.btn-success.active,
    .navbar .navbar-nav > li > a.btn.btn-success.disabled,
    .navbar .navbar-nav > li > a.btn.btn-success.disabled:hover,
    .navbar .navbar-nav > li > a.btn.btn-success.disabled:focus,
    .navbar .navbar-nav > li > a.btn.btn-success.disabled.focus,
    .navbar .navbar-nav > li > a.btn.btn-success.disabled:active,
    .navbar .navbar-nav > li > a.btn.btn-success.disabled.active,
    .navbar .navbar-nav > li > a.btn.btn-success:disabled,
    .navbar .navbar-nav > li > a.btn.btn-success:disabled:hover,
    .navbar .navbar-nav > li > a.btn.btn-success:disabled:focus,
    .navbar .navbar-nav > li > a.btn.btn-success:disabled.focus,
    .navbar .navbar-nav > li > a.btn.btn-success:disabled:active,
    .navbar .navbar-nav > li > a.btn.btn-success:disabled.active,
    .navbar .navbar-nav > li > a.btn.btn-success[disabled],
    .navbar .navbar-nav > li > a.btn.btn-success[disabled]:hover,
    .navbar .navbar-nav > li > a.btn.btn-success[disabled]:focus,
    .navbar .navbar-nav > li > a.btn.btn-success[disabled].focus,
    .navbar .navbar-nav > li > a.btn.btn-success[disabled]:active,
    .navbar .navbar-nav > li > a.btn.btn-success[disabled].active,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-success,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-success:hover,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-success:focus,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-success.focus,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-success:active,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-success.active {
      box-shadow: none; }
    .btn.btn-success.btn-simple,
    .navbar .navbar-nav > li > a.btn.btn-success.btn-simple {
      background-color: transparent;
      color: #4caf50;
      box-shadow: none; }
      .btn.btn-success.btn-simple:hover, .btn.btn-success.btn-simple:focus, .btn.btn-success.btn-simple:active,
      .navbar .navbar-nav > li > a.btn.btn-success.btn-simple:hover,
      .navbar .navbar-nav > li > a.btn.btn-success.btn-simple:focus,
      .navbar .navbar-nav > li > a.btn.btn-success.btn-simple:active {
        background-color: transparent;
        color: #4caf50; }
  .btn.btn-warning,
  .navbar .navbar-nav > li > a.btn.btn-warning {
    box-shadow: 0 2px 2px 0 rgba(255, 152, 0, 0.14), 0 3px 1px -2px rgba(255, 152, 0, 0.2), 0 1px 5px 0 rgba(255, 152, 0, 0.12); }
    .btn.btn-warning, .btn.btn-warning:hover, .btn.btn-warning:focus, .btn.btn-warning:active, .btn.btn-warning.active, .btn.btn-warning:active:focus, .btn.btn-warning:active:hover, .btn.btn-warning.active:focus, .btn.btn-warning.active:hover,
    .open > .btn.btn-warning.dropdown-toggle,
    .open > .btn.btn-warning.dropdown-toggle:focus,
    .open > .btn.btn-warning.dropdown-toggle:hover,
    .navbar .navbar-nav > li > a.btn.btn-warning,
    .navbar .navbar-nav > li > a.btn.btn-warning:hover,
    .navbar .navbar-nav > li > a.btn.btn-warning:focus,
    .navbar .navbar-nav > li > a.btn.btn-warning:active,
    .navbar .navbar-nav > li > a.btn.btn-warning.active,
    .navbar .navbar-nav > li > a.btn.btn-warning:active:focus,
    .navbar .navbar-nav > li > a.btn.btn-warning:active:hover,
    .navbar .navbar-nav > li > a.btn.btn-warning.active:focus,
    .navbar .navbar-nav > li > a.btn.btn-warning.active:hover,
    .open >
    .navbar .navbar-nav > li > a.btn.btn-warning.dropdown-toggle,
    .open >
    .navbar .navbar-nav > li > a.btn.btn-warning.dropdown-toggle:focus,
    .open >
    .navbar .navbar-nav > li > a.btn.btn-warning.dropdown-toggle:hover {
      background-color: #ff9800;
      color: #FFFFFF; }
    .btn.btn-warning:focus, .btn.btn-warning:active, .btn.btn-warning:hover,
    .navbar .navbar-nav > li > a.btn.btn-warning:focus,
    .navbar .navbar-nav > li > a.btn.btn-warning:active,
    .navbar .navbar-nav > li > a.btn.btn-warning:hover {
      box-shadow: 0 14px 26px -12px rgba(255, 152, 0, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(255, 152, 0, 0.2); }
    .btn.btn-warning.disabled, .btn.btn-warning.disabled:hover, .btn.btn-warning.disabled:focus, .btn.btn-warning.disabled.focus, .btn.btn-warning.disabled:active, .btn.btn-warning.disabled.active, .btn.btn-warning:disabled, .btn.btn-warning:disabled:hover, .btn.btn-warning:disabled:focus, .btn.btn-warning:disabled.focus, .btn.btn-warning:disabled:active, .btn.btn-warning:disabled.active, .btn.btn-warning[disabled], .btn.btn-warning[disabled]:hover, .btn.btn-warning[disabled]:focus, .btn.btn-warning[disabled].focus, .btn.btn-warning[disabled]:active, .btn.btn-warning[disabled].active,
    fieldset[disabled] .btn.btn-warning,
    fieldset[disabled] .btn.btn-warning:hover,
    fieldset[disabled] .btn.btn-warning:focus,
    fieldset[disabled] .btn.btn-warning.focus,
    fieldset[disabled] .btn.btn-warning:active,
    fieldset[disabled] .btn.btn-warning.active,
    .navbar .navbar-nav > li > a.btn.btn-warning.disabled,
    .navbar .navbar-nav > li > a.btn.btn-warning.disabled:hover,
    .navbar .navbar-nav > li > a.btn.btn-warning.disabled:focus,
    .navbar .navbar-nav > li > a.btn.btn-warning.disabled.focus,
    .navbar .navbar-nav > li > a.btn.btn-warning.disabled:active,
    .navbar .navbar-nav > li > a.btn.btn-warning.disabled.active,
    .navbar .navbar-nav > li > a.btn.btn-warning:disabled,
    .navbar .navbar-nav > li > a.btn.btn-warning:disabled:hover,
    .navbar .navbar-nav > li > a.btn.btn-warning:disabled:focus,
    .navbar .navbar-nav > li > a.btn.btn-warning:disabled.focus,
    .navbar .navbar-nav > li > a.btn.btn-warning:disabled:active,
    .navbar .navbar-nav > li > a.btn.btn-warning:disabled.active,
    .navbar .navbar-nav > li > a.btn.btn-warning[disabled],
    .navbar .navbar-nav > li > a.btn.btn-warning[disabled]:hover,
    .navbar .navbar-nav > li > a.btn.btn-warning[disabled]:focus,
    .navbar .navbar-nav > li > a.btn.btn-warning[disabled].focus,
    .navbar .navbar-nav > li > a.btn.btn-warning[disabled]:active,
    .navbar .navbar-nav > li > a.btn.btn-warning[disabled].active,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-warning,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-warning:hover,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-warning:focus,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-warning.focus,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-warning:active,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-warning.active {
      box-shadow: none; }
    .btn.btn-warning.btn-simple,
    .navbar .navbar-nav > li > a.btn.btn-warning.btn-simple {
      background-color: transparent;
      color: #ff9800;
      box-shadow: none; }
      .btn.btn-warning.btn-simple:hover, .btn.btn-warning.btn-simple:focus, .btn.btn-warning.btn-simple:active,
      .navbar .navbar-nav > li > a.btn.btn-warning.btn-simple:hover,
      .navbar .navbar-nav > li > a.btn.btn-warning.btn-simple:focus,
      .navbar .navbar-nav > li > a.btn.btn-warning.btn-simple:active {
        background-color: transparent;
        color: #ff9800; }
  .btn.btn-danger,
  .navbar .navbar-nav > li > a.btn.btn-danger {
    box-shadow: 0 2px 2px 0 rgba(244, 67, 54, 0.14), 0 3px 1px -2px rgba(244, 67, 54, 0.2), 0 1px 5px 0 rgba(244, 67, 54, 0.12); }
    .btn.btn-danger, .btn.btn-danger:hover, .btn.btn-danger:focus, .btn.btn-danger:active, .btn.btn-danger.active, .btn.btn-danger:active:focus, .btn.btn-danger:active:hover, .btn.btn-danger.active:focus, .btn.btn-danger.active:hover,
    .open > .btn.btn-danger.dropdown-toggle,
    .open > .btn.btn-danger.dropdown-toggle:focus,
    .open > .btn.btn-danger.dropdown-toggle:hover,
    .navbar .navbar-nav > li > a.btn.btn-danger,
    .navbar .navbar-nav > li > a.btn.btn-danger:hover,
    .navbar .navbar-nav > li > a.btn.btn-danger:focus,
    .navbar .navbar-nav > li > a.btn.btn-danger:active,
    .navbar .navbar-nav > li > a.btn.btn-danger.active,
    .navbar .navbar-nav > li > a.btn.btn-danger:active:focus,
    .navbar .navbar-nav > li > a.btn.btn-danger:active:hover,
    .navbar .navbar-nav > li > a.btn.btn-danger.active:focus,
    .navbar .navbar-nav > li > a.btn.btn-danger.active:hover,
    .open >
    .navbar .navbar-nav > li > a.btn.btn-danger.dropdown-toggle,
    .open >
    .navbar .navbar-nav > li > a.btn.btn-danger.dropdown-toggle:focus,
    .open >
    .navbar .navbar-nav > li > a.btn.btn-danger.dropdown-toggle:hover {
      background-color: #f44336;
      color: #FFFFFF; }
    .btn.btn-danger:focus, .btn.btn-danger:active, .btn.btn-danger:hover,
    .navbar .navbar-nav > li > a.btn.btn-danger:focus,
    .navbar .navbar-nav > li > a.btn.btn-danger:active,
    .navbar .navbar-nav > li > a.btn.btn-danger:hover {
      box-shadow: 0 14px 26px -12px rgba(244, 67, 54, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(244, 67, 54, 0.2); }
    .btn.btn-danger.disabled, .btn.btn-danger.disabled:hover, .btn.btn-danger.disabled:focus, .btn.btn-danger.disabled.focus, .btn.btn-danger.disabled:active, .btn.btn-danger.disabled.active, .btn.btn-danger:disabled, .btn.btn-danger:disabled:hover, .btn.btn-danger:disabled:focus, .btn.btn-danger:disabled.focus, .btn.btn-danger:disabled:active, .btn.btn-danger:disabled.active, .btn.btn-danger[disabled], .btn.btn-danger[disabled]:hover, .btn.btn-danger[disabled]:focus, .btn.btn-danger[disabled].focus, .btn.btn-danger[disabled]:active, .btn.btn-danger[disabled].active,
    fieldset[disabled] .btn.btn-danger,
    fieldset[disabled] .btn.btn-danger:hover,
    fieldset[disabled] .btn.btn-danger:focus,
    fieldset[disabled] .btn.btn-danger.focus,
    fieldset[disabled] .btn.btn-danger:active,
    fieldset[disabled] .btn.btn-danger.active,
    .navbar .navbar-nav > li > a.btn.btn-danger.disabled,
    .navbar .navbar-nav > li > a.btn.btn-danger.disabled:hover,
    .navbar .navbar-nav > li > a.btn.btn-danger.disabled:focus,
    .navbar .navbar-nav > li > a.btn.btn-danger.disabled.focus,
    .navbar .navbar-nav > li > a.btn.btn-danger.disabled:active,
    .navbar .navbar-nav > li > a.btn.btn-danger.disabled.active,
    .navbar .navbar-nav > li > a.btn.btn-danger:disabled,
    .navbar .navbar-nav > li > a.btn.btn-danger:disabled:hover,
    .navbar .navbar-nav > li > a.btn.btn-danger:disabled:focus,
    .navbar .navbar-nav > li > a.btn.btn-danger:disabled.focus,
    .navbar .navbar-nav > li > a.btn.btn-danger:disabled:active,
    .navbar .navbar-nav > li > a.btn.btn-danger:disabled.active,
    .navbar .navbar-nav > li > a.btn.btn-danger[disabled],
    .navbar .navbar-nav > li > a.btn.btn-danger[disabled]:hover,
    .navbar .navbar-nav > li > a.btn.btn-danger[disabled]:focus,
    .navbar .navbar-nav > li > a.btn.btn-danger[disabled].focus,
    .navbar .navbar-nav > li > a.btn.btn-danger[disabled]:active,
    .navbar .navbar-nav > li > a.btn.btn-danger[disabled].active,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-danger,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-danger:hover,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-danger:focus,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-danger.focus,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-danger:active,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-danger.active {
      box-shadow: none; }
    .btn.btn-danger.btn-simple,
    .navbar .navbar-nav > li > a.btn.btn-danger.btn-simple {
      background-color: transparent;
      color: #f44336;
      box-shadow: none; }
      .btn.btn-danger.btn-simple:hover, .btn.btn-danger.btn-simple:focus, .btn.btn-danger.btn-simple:active,
      .navbar .navbar-nav > li > a.btn.btn-danger.btn-simple:hover,
      .navbar .navbar-nav > li > a.btn.btn-danger.btn-simple:focus,
      .navbar .navbar-nav > li > a.btn.btn-danger.btn-simple:active {
        background-color: transparent;
        color: #f44336; }
  .btn.btn-rose,
  .navbar .navbar-nav > li > a.btn.btn-rose {
    box-shadow: 0 2px 2px 0 rgba(233, 30, 99, 0.14), 0 3px 1px -2px rgba(233, 30, 99, 0.2), 0 1px 5px 0 rgba(233, 30, 99, 0.12); }
    .btn.btn-rose, .btn.btn-rose:hover, .btn.btn-rose:focus, .btn.btn-rose:active, .btn.btn-rose.active, .btn.btn-rose:active:focus, .btn.btn-rose:active:hover, .btn.btn-rose.active:focus, .btn.btn-rose.active:hover,
    .open > .btn.btn-rose.dropdown-toggle,
    .open > .btn.btn-rose.dropdown-toggle:focus,
    .open > .btn.btn-rose.dropdown-toggle:hover,
    .navbar .navbar-nav > li > a.btn.btn-rose,
    .navbar .navbar-nav > li > a.btn.btn-rose:hover,
    .navbar .navbar-nav > li > a.btn.btn-rose:focus,
    .navbar .navbar-nav > li > a.btn.btn-rose:active,
    .navbar .navbar-nav > li > a.btn.btn-rose.active,
    .navbar .navbar-nav > li > a.btn.btn-rose:active:focus,
    .navbar .navbar-nav > li > a.btn.btn-rose:active:hover,
    .navbar .navbar-nav > li > a.btn.btn-rose.active:focus,
    .navbar .navbar-nav > li > a.btn.btn-rose.active:hover,
    .open >
    .navbar .navbar-nav > li > a.btn.btn-rose.dropdown-toggle,
    .open >
    .navbar .navbar-nav > li > a.btn.btn-rose.dropdown-toggle:focus,
    .open >
    .navbar .navbar-nav > li > a.btn.btn-rose.dropdown-toggle:hover {
      background-color: #e91e63;
      color: #FFFFFF; }
    .btn.btn-rose:focus, .btn.btn-rose:active, .btn.btn-rose:hover,
    .navbar .navbar-nav > li > a.btn.btn-rose:focus,
    .navbar .navbar-nav > li > a.btn.btn-rose:active,
    .navbar .navbar-nav > li > a.btn.btn-rose:hover {
      box-shadow: 0 14px 26px -12px rgba(233, 30, 99, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(233, 30, 99, 0.2); }
    .btn.btn-rose.disabled, .btn.btn-rose.disabled:hover, .btn.btn-rose.disabled:focus, .btn.btn-rose.disabled.focus, .btn.btn-rose.disabled:active, .btn.btn-rose.disabled.active, .btn.btn-rose:disabled, .btn.btn-rose:disabled:hover, .btn.btn-rose:disabled:focus, .btn.btn-rose:disabled.focus, .btn.btn-rose:disabled:active, .btn.btn-rose:disabled.active, .btn.btn-rose[disabled], .btn.btn-rose[disabled]:hover, .btn.btn-rose[disabled]:focus, .btn.btn-rose[disabled].focus, .btn.btn-rose[disabled]:active, .btn.btn-rose[disabled].active,
    fieldset[disabled] .btn.btn-rose,
    fieldset[disabled] .btn.btn-rose:hover,
    fieldset[disabled] .btn.btn-rose:focus,
    fieldset[disabled] .btn.btn-rose.focus,
    fieldset[disabled] .btn.btn-rose:active,
    fieldset[disabled] .btn.btn-rose.active,
    .navbar .navbar-nav > li > a.btn.btn-rose.disabled,
    .navbar .navbar-nav > li > a.btn.btn-rose.disabled:hover,
    .navbar .navbar-nav > li > a.btn.btn-rose.disabled:focus,
    .navbar .navbar-nav > li > a.btn.btn-rose.disabled.focus,
    .navbar .navbar-nav > li > a.btn.btn-rose.disabled:active,
    .navbar .navbar-nav > li > a.btn.btn-rose.disabled.active,
    .navbar .navbar-nav > li > a.btn.btn-rose:disabled,
    .navbar .navbar-nav > li > a.btn.btn-rose:disabled:hover,
    .navbar .navbar-nav > li > a.btn.btn-rose:disabled:focus,
    .navbar .navbar-nav > li > a.btn.btn-rose:disabled.focus,
    .navbar .navbar-nav > li > a.btn.btn-rose:disabled:active,
    .navbar .navbar-nav > li > a.btn.btn-rose:disabled.active,
    .navbar .navbar-nav > li > a.btn.btn-rose[disabled],
    .navbar .navbar-nav > li > a.btn.btn-rose[disabled]:hover,
    .navbar .navbar-nav > li > a.btn.btn-rose[disabled]:focus,
    .navbar .navbar-nav > li > a.btn.btn-rose[disabled].focus,
    .navbar .navbar-nav > li > a.btn.btn-rose[disabled]:active,
    .navbar .navbar-nav > li > a.btn.btn-rose[disabled].active,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-rose,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-rose:hover,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-rose:focus,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-rose.focus,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-rose:active,
    fieldset[disabled]
    .navbar .navbar-nav > li > a.btn.btn-rose.active {
      box-shadow: none; }
    .btn.btn-rose.btn-simple,
    .navbar .navbar-nav > li > a.btn.btn-rose.btn-simple {
      background-color: transparent;
      color: #e91e63;
      box-shadow: none; }
      .btn.btn-rose.btn-simple:hover, .btn.btn-rose.btn-simple:focus, .btn.btn-rose.btn-simple:active,
      .navbar .navbar-nav > li > a.btn.btn-rose.btn-simple:hover,
      .navbar .navbar-nav > li > a.btn.btn-rose.btn-simple:focus,
      .navbar .navbar-nav > li > a.btn.btn-rose.btn-simple:active {
        background-color: transparent;
        color: #e91e63; }
  .btn.btn-white, .btn.btn-white:focus, .btn.btn-white:hover,
  .navbar .navbar-nav > li > a.btn.btn-white,
  .navbar .navbar-nav > li > a.btn.btn-white:focus,
  .navbar .navbar-nav > li > a.btn.btn-white:hover {
    background-color: #FFFFFF;
    color: #999999; }
  .btn.btn-white.btn-simple,
  .navbar .navbar-nav > li > a.btn.btn-white.btn-simple {
    color: #FFFFFF;
    background: transparent;
    box-shadow: none; }
  .btn.btn-facebook,
  .navbar .navbar-nav > li > a.btn.btn-facebook {
    background-color: #3b5998;
    color: #fff;
    box-shadow: 0 2px 2px 0 rgba(59, 89, 152, 0.14), 0 3px 1px -2px rgba(59, 89, 152, 0.2), 0 1px 5px 0 rgba(59, 89, 152, 0.12); }
    .btn.btn-facebook:focus, .btn.btn-facebook:active, .btn.btn-facebook:hover,
    .navbar .navbar-nav > li > a.btn.btn-facebook:focus,
    .navbar .navbar-nav > li > a.btn.btn-facebook:active,
    .navbar .navbar-nav > li > a.btn.btn-facebook:hover {
      background-color: #3b5998;
      color: #fff;
      box-shadow: 0 14px 26px -12px rgba(59, 89, 152, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(59, 89, 152, 0.2); }
    .btn.btn-facebook.btn-simple,
    .navbar .navbar-nav > li > a.btn.btn-facebook.btn-simple {
      color: #3b5998;
      background-color: transparent;
      box-shadow: none; }
  .btn.btn-twitter,
  .navbar .navbar-nav > li > a.btn.btn-twitter {
    background-color: #55acee;
    color: #fff;
    box-shadow: 0 2px 2px 0 rgba(85, 172, 238, 0.14), 0 3px 1px -2px rgba(85, 172, 238, 0.2), 0 1px 5px 0 rgba(85, 172, 238, 0.12); }
    .btn.btn-twitter:focus, .btn.btn-twitter:active, .btn.btn-twitter:hover,
    .navbar .navbar-nav > li > a.btn.btn-twitter:focus,
    .navbar .navbar-nav > li > a.btn.btn-twitter:active,
    .navbar .navbar-nav > li > a.btn.btn-twitter:hover {
      background-color: #55acee;
      color: #fff;
      box-shadow: 0 14px 26px -12px rgba(85, 172, 238, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(85, 172, 238, 0.2); }
    .btn.btn-twitter.btn-simple,
    .navbar .navbar-nav > li > a.btn.btn-twitter.btn-simple {
      color: #55acee;
      background-color: transparent;
      box-shadow: none; }
  .btn.btn-pinterest,
  .navbar .navbar-nav > li > a.btn.btn-pinterest {
    background-color: #cc2127;
    color: #fff;
    box-shadow: 0 2px 2px 0 rgba(204, 33, 39, 0.14), 0 3px 1px -2px rgba(204, 33, 39, 0.2), 0 1px 5px 0 rgba(204, 33, 39, 0.12); }
    .btn.btn-pinterest:focus, .btn.btn-pinterest:active, .btn.btn-pinterest:hover,
    .navbar .navbar-nav > li > a.btn.btn-pinterest:focus,
    .navbar .navbar-nav > li > a.btn.btn-pinterest:active,
    .navbar .navbar-nav > li > a.btn.btn-pinterest:hover {
      background-color: #cc2127;
      color: #fff;
      box-shadow: 0 14px 26px -12px rgba(204, 33, 39, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(204, 33, 39, 0.2); }
    .btn.btn-pinterest.btn-simple,
    .navbar .navbar-nav > li > a.btn.btn-pinterest.btn-simple {
      color: #cc2127;
      background-color: transparent;
      box-shadow: none; }
  .btn.btn-google,
  .navbar .navbar-nav > li > a.btn.btn-google {
    background-color: #dd4b39;
    color: #fff;
    box-shadow: 0 2px 2px 0 rgba(221, 75, 57, 0.14), 0 3px 1px -2px rgba(221, 75, 57, 0.2), 0 1px 5px 0 rgba(221, 75, 57, 0.12); }
    .btn.btn-google:focus, .btn.btn-google:active, .btn.btn-google:hover,
    .navbar .navbar-nav > li > a.btn.btn-google:focus,
    .navbar .navbar-nav > li > a.btn.btn-google:active,
    .navbar .navbar-nav > li > a.btn.btn-google:hover {
      background-color: #dd4b39;
      color: #fff;
      box-shadow: 0 14px 26px -12px rgba(221, 75, 57, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(221, 75, 57, 0.2); }
    .btn.btn-google.btn-simple,
    .navbar .navbar-nav > li > a.btn.btn-google.btn-simple {
      color: #dd4b39;
      background-color: transparent;
      box-shadow: none; }
  .btn.btn-linkedin,
  .navbar .navbar-nav > li > a.btn.btn-linkedin {
    background-color: #0976b4;
    color: #fff;
    box-shadow: 0 2px 2px 0 rgba(9, 118, 180, 0.14), 0 3px 1px -2px rgba(9, 118, 180, 0.2), 0 1px 5px 0 rgba(9, 118, 180, 0.12); }
    .btn.btn-linkedin:focus, .btn.btn-linkedin:active, .btn.btn-linkedin:hover,
    .navbar .navbar-nav > li > a.btn.btn-linkedin:focus,
    .navbar .navbar-nav > li > a.btn.btn-linkedin:active,
    .navbar .navbar-nav > li > a.btn.btn-linkedin:hover {
      background-color: #0976b4;
      color: #fff;
      box-shadow: 0 14px 26px -12px rgba(9, 118, 180, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(9, 118, 180, 0.2); }
    .btn.btn-linkedin.btn-simple,
    .navbar .navbar-nav > li > a.btn.btn-linkedin.btn-simple {
      color: #0976b4;
      background-color: transparent;
      box-shadow: none; }
  .btn.btn-dribbble,
  .navbar .navbar-nav > li > a.btn.btn-dribbble {
    background-color: #ea4c89;
    color: #fff;
    box-shadow: 0 2px 2px 0 rgba(234, 76, 137, 0.14), 0 3px 1px -2px rgba(234, 76, 137, 0.2), 0 1px 5px 0 rgba(234, 76, 137, 0.12); }
    .btn.btn-dribbble:focus, .btn.btn-dribbble:active, .btn.btn-dribbble:hover,
    .navbar .navbar-nav > li > a.btn.btn-dribbble:focus,
    .navbar .navbar-nav > li > a.btn.btn-dribbble:active,
    .navbar .navbar-nav > li > a.btn.btn-dribbble:hover {
      background-color: #ea4c89;
      color: #fff;
      box-shadow: 0 14px 26px -12px rgba(234, 76, 137, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(234, 76, 137, 0.2); }
    .btn.btn-dribbble.btn-simple,
    .navbar .navbar-nav > li > a.btn.btn-dribbble.btn-simple {
      color: #ea4c89;
      background-color: transparent;
      box-shadow: none; }
  .btn.btn-github,
  .navbar .navbar-nav > li > a.btn.btn-github {
    background-color: #333333;
    color: #fff;
    box-shadow: 0 2px 2px 0 rgba(51, 51, 51, 0.14), 0 3px 1px -2px rgba(51, 51, 51, 0.2), 0 1px 5px 0 rgba(51, 51, 51, 0.12); }
    .btn.btn-github:focus, .btn.btn-github:active, .btn.btn-github:hover,
    .navbar .navbar-nav > li > a.btn.btn-github:focus,
    .navbar .navbar-nav > li > a.btn.btn-github:active,
    .navbar .navbar-nav > li > a.btn.btn-github:hover {
      background-color: #333333;
      color: #fff;
      box-shadow: 0 14px 26px -12px rgba(51, 51, 51, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(51, 51, 51, 0.2); }
    .btn.btn-github.btn-simple,
    .navbar .navbar-nav > li > a.btn.btn-github.btn-simple {
      color: #333333;
      background-color: transparent;
      box-shadow: none; }
  .btn.btn-youtube,
  .navbar .navbar-nav > li > a.btn.btn-youtube {
    background-color: #e52d27;
    color: #fff;
    box-shadow: 0 2px 2px 0 rgba(229, 45, 39, 0.14), 0 3px 1px -2px rgba(229, 45, 39, 0.2), 0 1px 5px 0 rgba(229, 45, 39, 0.12); }
    .btn.btn-youtube:focus, .btn.btn-youtube:active, .btn.btn-youtube:hover,
    .navbar .navbar-nav > li > a.btn.btn-youtube:focus,
    .navbar .navbar-nav > li > a.btn.btn-youtube:active,
    .navbar .navbar-nav > li > a.btn.btn-youtube:hover {
      background-color: #e52d27;
      color: #fff;
      box-shadow: 0 14px 26px -12px rgba(229, 45, 39, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(229, 45, 39, 0.2); }
    .btn.btn-youtube.btn-simple,
    .navbar .navbar-nav > li > a.btn.btn-youtube.btn-simple {
      color: #e52d27;
      background-color: transparent;
      box-shadow: none; }
  .btn.btn-instagram,
  .navbar .navbar-nav > li > a.btn.btn-instagram {
    background-color: #125688;
    color: #fff;
    box-shadow: 0 2px 2px 0 rgba(18, 86, 136, 0.14), 0 3px 1px -2px rgba(18, 86, 136, 0.2), 0 1px 5px 0 rgba(18, 86, 136, 0.12); }
    .btn.btn-instagram:focus, .btn.btn-instagram:active, .btn.btn-instagram:hover,
    .navbar .navbar-nav > li > a.btn.btn-instagram:focus,
    .navbar .navbar-nav > li > a.btn.btn-instagram:active,
    .navbar .navbar-nav > li > a.btn.btn-instagram:hover {
      background-color: #125688;
      color: #fff;
      box-shadow: 0 14px 26px -12px rgba(18, 86, 136, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(18, 86, 136, 0.2); }
    .btn.btn-instagram.btn-simple,
    .navbar .navbar-nav > li > a.btn.btn-instagram.btn-simple {
      color: #125688;
      background-color: transparent;
      box-shadow: none; }
  .btn.btn-reddit,
  .navbar .navbar-nav > li > a.btn.btn-reddit {
    background-color: #ff4500;
    color: #fff;
    box-shadow: 0 2px 2px 0 rgba(255, 69, 0, 0.14), 0 3px 1px -2px rgba(255, 69, 0, 0.2), 0 1px 5px 0 rgba(255, 69, 0, 0.12); }
    .btn.btn-reddit:focus, .btn.btn-reddit:active, .btn.btn-reddit:hover,
    .navbar .navbar-nav > li > a.btn.btn-reddit:focus,
    .navbar .navbar-nav > li > a.btn.btn-reddit:active,
    .navbar .navbar-nav > li > a.btn.btn-reddit:hover {
      background-color: #ff4500;
      color: #fff;
      box-shadow: 0 14px 26px -12px rgba(255, 69, 0, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(255, 69, 0, 0.2); }
    .btn.btn-reddit.btn-simple,
    .navbar .navbar-nav > li > a.btn.btn-reddit.btn-simple {
      color: #ff4500;
      background-color: transparent;
      box-shadow: none; }
  .btn.btn-tumblr,
  .navbar .navbar-nav > li > a.btn.btn-tumblr {
    background-color: #35465c;
    color: #fff;
    box-shadow: 0 2px 2px 0 rgba(53, 70, 92, 0.14), 0 3px 1px -2px rgba(53, 70, 92, 0.2), 0 1px 5px 0 rgba(53, 70, 92, 0.12); }
    .btn.btn-tumblr:focus, .btn.btn-tumblr:active, .btn.btn-tumblr:hover,
    .navbar .navbar-nav > li > a.btn.btn-tumblr:focus,
    .navbar .navbar-nav > li > a.btn.btn-tumblr:active,
    .navbar .navbar-nav > li > a.btn.btn-tumblr:hover {
      background-color: #35465c;
      color: #fff;
      box-shadow: 0 14px 26px -12px rgba(53, 70, 92, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(53, 70, 92, 0.2); }
    .btn.btn-tumblr.btn-simple,
    .navbar .navbar-nav > li > a.btn.btn-tumblr.btn-simple {
      color: #35465c;
      background-color: transparent;
      box-shadow: none; }
  .btn.btn-behance,
  .navbar .navbar-nav > li > a.btn.btn-behance {
    background-color: #1769ff;
    color: #fff;
    box-shadow: 0 2px 2px 0 rgba(23, 105, 255, 0.14), 0 3px 1px -2px rgba(23, 105, 255, 0.2), 0 1px 5px 0 rgba(23, 105, 255, 0.12); }
    .btn.btn-behance:focus, .btn.btn-behance:active, .btn.btn-behance:hover,
    .navbar .navbar-nav > li > a.btn.btn-behance:focus,
    .navbar .navbar-nav > li > a.btn.btn-behance:active,
    .navbar .navbar-nav > li > a.btn.btn-behance:hover {
      background-color: #1769ff;
      color: #fff;
      box-shadow: 0 14px 26px -12px rgba(23, 105, 255, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(23, 105, 255, 0.2); }
    .btn.btn-behance.btn-simple,
    .navbar .navbar-nav > li > a.btn.btn-behance.btn-simple {
      color: #1769ff;
      background-color: transparent;
      box-shadow: none; }
  .btn:focus, .btn:active, .btn:active:focus,
  .navbar .navbar-nav > li > a.btn:focus,
  .navbar .navbar-nav > li > a.btn:active,
  .navbar .navbar-nav > li > a.btn:active:focus {
    outline: 0; }
  .btn.btn-round,
  .navbar .navbar-nav > li > a.btn.btn-round {
    border-radius: 30px; }
  .btn:not(.btn-just-icon):not(.btn-fab) .fa,
  .navbar .navbar-nav > li > a.btn:not(.btn-just-icon):not(.btn-fab) .fa {
    font-size: 18px;
    margin-top: -2px;
    position: relative;
    top: 2px; }
  .btn.btn-fab,
  .navbar .navbar-nav > li > a.btn.btn-fab {
    border-radius: 50%;
    font-size: 24px;
    height: 56px;
    margin: auto;
    min-width: 56px;
    width: 56px;
    padding: 0;
    overflow: hidden;
    position: relative;
    line-height: normal; }
    .btn.btn-fab .ripple-container,
    .navbar .navbar-nav > li > a.btn.btn-fab .ripple-container {
      border-radius: 50%; }
    .btn.btn-fab.btn-fab-mini,
    .btn-group-sm .btn.btn-fab,
    .navbar .navbar-nav > li > a.btn.btn-fab.btn-fab-mini,
    .btn-group-sm
    .navbar .navbar-nav > li > a.btn.btn-fab {
      height: 40px;
      min-width: 40px;
      width: 40px; }
      .btn.btn-fab.btn-fab-mini.material-icons,
      .btn-group-sm .btn.btn-fab.material-icons,
      .navbar .navbar-nav > li > a.btn.btn-fab.btn-fab-mini.material-icons,
      .btn-group-sm
      .navbar .navbar-nav > li > a.btn.btn-fab.material-icons {
        top: -3.5px;
        left: -3.5px; }
      .btn.btn-fab.btn-fab-mini .material-icons,
      .btn-group-sm .btn.btn-fab .material-icons,
      .navbar .navbar-nav > li > a.btn.btn-fab.btn-fab-mini .material-icons,
      .btn-group-sm
      .navbar .navbar-nav > li > a.btn.btn-fab .material-icons {
        font-size: 17px; }
    .btn.btn-fab i.material-icons,
    .navbar .navbar-nav > li > a.btn.btn-fab i.material-icons {
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-12px, -12px);
              transform: translate(-12px, -12px);
      line-height: 24px;
      width: 24px;
      font-size: 24px; }
  .btn.btn-lg,
  .btn-group-lg .btn,
  .navbar .navbar-nav > li > a.btn.btn-lg,
  .btn-group-lg
  .navbar .navbar-nav > li > a.btn {
    font-size: 14px;
    padding: 18px 36px; }
  .btn.btn-sm,
  .btn-group-sm .btn,
  .navbar .navbar-nav > li > a.btn.btn-sm,
  .btn-group-sm
  .navbar .navbar-nav > li > a.btn {
    padding: 5px 20px;
    font-size: 11px; }
  .btn.btn-xs,
  .btn-group-xs .btn,
  .navbar .navbar-nav > li > a.btn.btn-xs,
  .btn-group-xs
  .navbar .navbar-nav > li > a.btn {
    padding: 4px 15px;
    font-size: 10px; }
  .btn.btn-just-icon,
  .navbar .navbar-nav > li > a.btn.btn-just-icon {
    font-size: 20px;
    padding: 11px 11px;
    line-height: 1em; }
    .btn.btn-just-icon i,
    .navbar .navbar-nav > li > a.btn.btn-just-icon i {
      width: 20px; }
    .btn.btn-just-icon.btn-lg,
    .navbar .navbar-nav > li > a.btn.btn-just-icon.btn-lg {
      font-size: 22px;
      padding: 13px 18px; }

.btn .material-icons {
  vertical-align: middle;
  font-size: 17px;
  top: -1px;
  position: relative; }

.btn .caret {
  margin-left: 2px; }

.navbar .navbar-nav > li > a.btn {
  margin-top: 2px;
  margin-bottom: 2px; }
  .navbar .navbar-nav > li > a.btn.btn-fab {
    margin: 5px 2px; }

.navbar .navbar-nav > li > a:not(.btn) .material-icons {
  margin-top: -3px;
  top: 0px;
  position: relative;
  margin-right: 3px; }

.navbar .navbar-nav > li > .profile-photo {
  margin: 5px 2px; }

.navbar-default:not(.navbar-transparent) .navbar-nav > li > a.btn.btn-white.btn-simple {
  color: #555555; }

.btn-group,
.btn-group-vertical {
  position: relative;
  margin: 10px 1px; }
  .btn-group.open > .dropdown-toggle.btn, .btn-group.open > .dropdown-toggle.btn.btn-default,
  .btn-group-vertical.open > .dropdown-toggle.btn,
  .btn-group-vertical.open > .dropdown-toggle.btn.btn-default {
    background-color: #FFFFFF; }
  .btn-group.open > .dropdown-toggle.btn.btn-inverse,
  .btn-group-vertical.open > .dropdown-toggle.btn.btn-inverse {
    background-color: #212121; }
  .btn-group.open > .dropdown-toggle.btn.btn-primary,
  .btn-group-vertical.open > .dropdown-toggle.btn.btn-primary {
    background-color: #9c27b0; }
  .btn-group.open > .dropdown-toggle.btn.btn-success,
  .btn-group-vertical.open > .dropdown-toggle.btn.btn-success {
    background-color: #4caf50; }
  .btn-group.open > .dropdown-toggle.btn.btn-info,
  .btn-group-vertical.open > .dropdown-toggle.btn.btn-info {
    background-color: #00bcd4; }
  .btn-group.open > .dropdown-toggle.btn.btn-warning,
  .btn-group-vertical.open > .dropdown-toggle.btn.btn-warning {
    background-color: #ff9800; }
  .btn-group.open > .dropdown-toggle.btn.btn-danger,
  .btn-group-vertical.open > .dropdown-toggle.btn.btn-danger {
    background-color: #f44336; }
  .btn-group.open > .dropdown-toggle.btn.btn-rose,
  .btn-group-vertical.open > .dropdown-toggle.btn.btn-rose {
    background-color: #e91e63; }
  .btn-group .dropdown-menu,
  .btn-group-vertical .dropdown-menu {
    border-radius: 0 0 3px 3px; }
  .btn-group.btn-group-raised,
  .btn-group-vertical.btn-group-raised {
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12); }
  .btn-group .btn + .btn,
  .btn-group .btn,
  .btn-group .btn:active,
  .btn-group .btn-group,
  .btn-group-vertical .btn + .btn,
  .btn-group-vertical .btn,
  .btn-group-vertical .btn:active,
  .btn-group-vertical .btn-group {
    margin: 0; }

.close {
  font-size: inherit;
  color: #FFFFFF;
  opacity: .9;
  text-shadow: none; }
  .close:hover, .close:focus {
    opacity: 1;
    color: #FFFFFF; }
  .close i {
    font-size: 11px; }

.loader {
  margin: 0 auto;
  width: 60px;
  position: absolute;
  display: block;
  left: 0;
  right: 0;
  z-index: 1;
  -webkit-transform: translate3d(0, -50%, 0);
  transform: translate3d(0, -50%, 0);
  text-align: center;
  top: 50%; }
  .loader:before {
    content: '';
    display: block;
    padding-top: 100%; }

.circular {
  -webkit-animation: rotate 2s linear infinite;
          animation: rotate 2s linear infinite;
  height: 100%;
  -webkit-transform-origin: center center;
          transform-origin: center center;
  width: 100%;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto; }

.path {
  stroke-dasharray: 1, 200;
  stroke-dashoffset: 0;
  -webkit-animation: dash 1.5s ease-in-out infinite, color 2s ease-in-out infinite;
          animation: dash 1.5s ease-in-out infinite, color 2s ease-in-out infinite;
  stroke-linecap: round; }

@-webkit-keyframes rotate {
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg); } }

@keyframes rotate {
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg); } }

@-webkit-keyframes dash {
  0% {
    stroke-dasharray: 1, 200;
    stroke-dashoffset: 0; }
  50% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -35px; }
  100% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -124px; } }

@keyframes dash {
  0% {
    stroke-dasharray: 1, 200;
    stroke-dashoffset: 0; }
  50% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -35px; }
  100% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -124px; } }

@-webkit-keyframes color {
  100%,
  0% {
    stroke: #9c27b0; }
  50% {
    stroke: #ff9800; }
  100% {
    stroke: #9c27b0; } }

@keyframes color {
  100%,
  0% {
    stroke: #9c27b0; }
  50% {
    stroke: #ff9800; }
  100% {
    stroke: #9c27b0; } }

body {
  background-color: #EEEEEE;
  color: #3C4858; }
  body.inverse {
    background: #333333; }
    body.inverse, body.inverse .form-control {
      color: #ffffff; }
    body.inverse .modal,
    body.inverse .modal .form-control,
    body.inverse .panel-default,
    body.inverse .panel-default .form-control,
    body.inverse .card,
    body.inverse .card .form-control {
      background-color: initial;
      color: initial; }

.wrapper.wrapper-full-page {
  height: auto;
  min-height: 100vh; }

blockquote p {
  font-style: italic; }

.life-of-material-dashboard {
  background: #FFFFFF; }

body, h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4 {
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  font-weight: 300;
  line-height: 1.5em; }

.serif-font {
  font-family: "Roboto Slab", "Times New Roman", serif; }

.page-header {
  height: 60vh;
  background-position: center center;
  background-size: cover;
  margin: 0;
  padding: 0;
  border: 0;
  border-bottom-left-radius: 6px;
  border-bottom-right-radius: 6px; }

a {
  color: #9c27b0; }
  a:hover, a:focus {
    color: #89229b;
    text-decoration: none; }
  a.text-info:hover, a.text-info:focus {
    color: #00a5bb; }
  a .material-icons {
    vertical-align: middle; }

a[data-toggle="collapse"][aria-expanded="true"] .caret,
.dropdown.open .caret,
.dropup.open .caret,
.btn-group.bootstrap-select.open .caret {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg); }

.caret,
.bootstrap-tagsinput .tag,
.bootstrap-tagsinput [data-role="remove"] {
  transition: all 150ms ease-in; }

/*           Animations              */
.animation-transition-general, .sidebar .logo .simple-text, .sidebar .logo .logo-normal, .sidebar .user .photo, .sidebar .user a, .hide-sidebar .sidebar, .hide-sidebar.sidebar-mini .sidebar, .animation, .login-page .card-login, .lock-page .card-profile {
  transition: all 300ms linear; }

.animation-transition-slow {
  transition: all 370ms linear; }

.animation-transition-fast, .mat-calendar-body-cell-content,
.mat-icon-button,
.mat-button-focus-overlay,
.mat-button, .panel .panel-heading i, .navbar {
  transition: all 150ms ease 0s; }

legend {
  border-bottom: 0; }

* {
  -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
  -webkit-tap-highlight-color: transparent; }
  *:focus {
    outline: 0; }

a:focus, a:active,
button:active, button:focus, button:hover,
button::-moz-focus-inner,
input[type="reset"]::-moz-focus-inner,
input[type="button"]::-moz-focus-inner,
input[type="submit"]::-moz-focus-inner,
select::-moz-focus-inner,
input[type="file"] > input[type="button"]::-moz-focus-inner {
  outline: 0 !important; }

@-webkit-keyframes hinge {
  0% {
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out; }
  20%, 60% {
    -webkit-transform: rotate3d(0, 0, 1, 80deg);
    transform: rotate3d(0, 0, 1, 80deg);
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out; }
  40%, 80% {
    -webkit-transform: rotate3d(0, 0, 1, 60deg);
    transform: rotate3d(0, 0, 1, 60deg);
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
    opacity: 1; }
  to {
    -webkit-transform: translate3d(0, 700px, 0);
    transform: translate3d(0, 700px, 0);
    opacity: 0; } }

@keyframes hinge {
  0% {
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out; }
  20%, 60% {
    -webkit-transform: rotate3d(0, 0, 1, 80deg);
    transform: rotate3d(0, 0, 1, 80deg);
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out; }
  40%, 80% {
    -webkit-transform: rotate3d(0, 0, 1, 60deg);
    transform: rotate3d(0, 0, 1, 60deg);
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
    opacity: 1; }
  to {
    -webkit-transform: translate3d(0, 700px, 0);
    transform: translate3d(0, 700px, 0);
    opacity: 0; } }

.hinge {
  -webkit-animation-name: hinge;
  animation-name: hinge; }

.animated.hinge {
  -webkit-animation-duration: 2s;
  animation-duration: 2s; }

.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both; }

legend {
  margin-bottom: 20px;
  font-size: 21px; }

output {
  padding-top: 8px;
  font-size: 14px;
  line-height: 1.42857143; }

.form-control {
  height: 36px;
  padding: 7px 0;
  font-size: 14px;
  line-height: 1.42857143; }

@media screen and (-webkit-min-device-pixel-ratio: 0) {
  input[type="date"].form-control,
  input[type="time"].form-control,
  input[type="datetime-local"].form-control,
  input[type="month"].form-control {
    line-height: 36px; }
  input[type="date"].input-sm,
  .input-group-sm input[type="date"],
  input[type="time"].input-sm,
  .input-group-sm
  input[type="time"],
  input[type="datetime-local"].input-sm,
  .input-group-sm
  input[type="datetime-local"],
  input[type="month"].input-sm,
  .input-group-sm
  input[type="month"] {
    line-height: 24px; }
  input[type="date"].input-lg,
  .input-group-lg input[type="date"],
  input[type="time"].input-lg,
  .input-group-lg
  input[type="time"],
  input[type="datetime-local"].input-lg,
  .input-group-lg
  input[type="datetime-local"],
  input[type="month"].input-lg,
  .input-group-lg
  input[type="month"] {
    line-height: 44px; } }

.radio label,
.checkbox label {
  min-height: 20px; }

.form-control-static {
  padding-top: 8px;
  padding-bottom: 8px;
  min-height: 34px; }

.input-sm .input-sm {
  height: 24px;
  padding: 3px 0;
  font-size: 11px;
  line-height: 1.5;
  border-radius: 0; }

.input-sm select.input-sm {
  height: 24px;
  line-height: 24px; }

.input-sm textarea.input-sm,
.input-sm select[multiple].input-sm {
  height: auto; }

.form-group-sm .form-control {
  height: 24px;
  padding: 3px 0;
  font-size: 11px;
  line-height: 1.5; }

.form-group-sm select.form-control {
  height: 24px;
  line-height: 24px; }

.form-group-sm textarea.form-control,
.form-group-sm select[multiple].form-control {
  height: auto; }

.form-group-sm .form-control-static {
  height: 24px;
  min-height: 31px;
  padding: 4px 0;
  font-size: 11px;
  line-height: 1.5; }

.input-lg .input-lg {
  height: 44px;
  padding: 9px 0;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 0; }

.input-lg select.input-lg {
  height: 44px;
  line-height: 44px; }

.input-lg textarea.input-lg,
.input-lg select[multiple].input-lg {
  height: auto; }

.form-group-lg .form-control {
  height: 44px;
  padding: 9px 0;
  font-size: 18px;
  line-height: 1.3333333; }

.form-group-lg select.form-control {
  height: 44px;
  line-height: 44px; }

.form-group-lg textarea.form-control,
.form-group-lg select[multiple].form-control {
  height: auto; }

.form-group-lg .form-control-static {
  height: 44px;
  min-height: 38px;
  padding: 10px 0;
  font-size: 18px;
  line-height: 1.3333333; }

.form-horizontal .radio,
.form-horizontal .checkbox,
.form-horizontal .radio-inline,
.form-horizontal .checkbox-inline {
  padding-top: 8px; }

.form-horizontal .radio,
.form-horizontal .checkbox {
  min-height: 28px; }

@media (min-width: 768px) {
  .form-horizontal .control-label {
    padding-top: 8px; } }

@media (min-width: 768px) {
  .form-horizontal .form-group-lg .control-label {
    padding-top: 12.9999997px;
    font-size: 18px; } }

@media (min-width: 768px) {
  .form-horizontal .form-group-sm .control-label {
    padding-top: 4px;
    font-size: 11px; } }

.label {
  border-radius: 2px; }
  .label, .label.label-default {
    background-color: #FFFFFF; }
  .label.label-inverse {
    background-color: #212121; }
  .label.label-primary {
    background-color: #9c27b0; }
  .label.label-success {
    background-color: #4caf50; }
  .label.label-info {
    background-color: #00bcd4; }
  .label.label-warning {
    background-color: #ff9800; }
  .label.label-danger {
    background-color: #f44336; }
  .label.label-rose {
    background-color: #e91e63; }

.form-control,
.form-group .form-control {
  border: 0;
  background-image: linear-gradient(#9c27b0, #9c27b0), linear-gradient(#D2D2D2, #D2D2D2);
  background-size: 0 2px, 100% 1px;
  background-repeat: no-repeat;
  background-position: center bottom, center calc(100% - 1px);
  background-color: transparent;
  transition: background 0s ease-out;
  float: none;
  box-shadow: none;
  border-radius: 0;
  font-weight: 400; }
  .form-control::-moz-placeholder,
  .form-group .form-control::-moz-placeholder {
    color: #AAAAAA;
    font-weight: 400; }
  .form-control:-ms-input-placeholder,
  .form-group .form-control:-ms-input-placeholder {
    color: #AAAAAA;
    font-weight: 400; }
  .form-control::-webkit-input-placeholder,
  .form-group .form-control::-webkit-input-placeholder {
    color: #AAAAAA;
    font-weight: 400; }
  .form-control[readonly], .form-control[disabled],
  fieldset[disabled] .form-control,
  .form-group .form-control[readonly],
  .form-group .form-control[disabled],
  fieldset[disabled]
  .form-group .form-control {
    background-color: transparent; }
  .form-control[disabled],
  fieldset[disabled] .form-control,
  .form-group .form-control[disabled],
  fieldset[disabled]
  .form-group .form-control {
    background-image: none;
    border-bottom: 1px dotted #D2D2D2; }

.form-group {
  position: relative; }
  .form-group.label-static label.control-label, .form-group.label-placeholder label.control-label, .form-group.label-floating label.control-label {
    position: absolute;
    pointer-events: none;
    transition: 0.3s ease all; }
  .form-group.label-floating label.control-label {
    will-change: left, top, contents; }
  .form-group.label-placeholder:not(.is-empty) label.control-label {
    display: none; }
  .form-group .help-block {
    position: absolute;
    display: none; }
  .form-group .form-control.valid:focus {
    background-image: linear-gradient(#4caf50, #4caf50), linear-gradient(#D2D2D2, #D2D2D2); }
  .form-group.is-focused .form-control {
    outline: none;
    background-image: linear-gradient(#9c27b0, #9c27b0), linear-gradient(#D2D2D2, #D2D2D2);
    background-size: 100% 2px, 100% 1px;
    box-shadow: none;
    transition-duration: 0.3s; }
    .form-group.is-focused .form-control .material-input:after {
      background-color: #9c27b0; }
  .form-group.is-focused.form-info .form-control {
    background-image: linear-gradient(#00bcd4, #00bcd4), linear-gradient(#D2D2D2, #D2D2D2); }
  .form-group.is-focused.form-success .form-control {
    background-image: linear-gradient(#4caf50, #4caf50), linear-gradient(#D2D2D2, #D2D2D2); }
  .form-group.is-focused.form-warning .form-control {
    background-image: linear-gradient(#ff9800, #ff9800), linear-gradient(#D2D2D2, #D2D2D2); }
  .form-group.is-focused.form-danger .form-control {
    background-image: linear-gradient(#f44336, #f44336), linear-gradient(#D2D2D2, #D2D2D2); }
  .form-group.is-focused.form-white .form-control {
    background-image: linear-gradient(#FFFFFF, #FFFFFF), linear-gradient(#D2D2D2, #D2D2D2); }
  .form-group.is-focused.label-placeholder label,
  .form-group.is-focused.label-placeholder label.control-label {
    color: #AAAAAA; }
  .form-group.is-focused .help-block {
    display: block; }
  .form-group.has-warning .form-control {
    box-shadow: none; }
  .form-group.has-warning.is-focused .form-control {
    background-image: linear-gradient(#ff9800, #ff9800), linear-gradient(#D2D2D2, #D2D2D2); }
  .form-group.has-warning label.control-label,
  .form-group.has-warning .help-block {
    color: #ff9800; }
  .form-group.has-error .form-control {
    box-shadow: none; }
  .form-group.has-error.is-focused .form-control {
    background-image: linear-gradient(#f44336, #f44336), linear-gradient(#D2D2D2, #D2D2D2); }
  .form-group.has-error .form-control {
    background-image: linear-gradient(#f44336, #f44336), linear-gradient(#D2D2D2, #D2D2D2);
    background-size: 100% 2px, 100% 1px;
    transition-duration: 0.3s; }
  .form-group.has-error label.control-label,
  .form-group.has-error .help-block {
    color: #f44336; }
  .form-group.has-success .form-control {
    box-shadow: none; }
  .form-group.has-success.is-focused .form-control {
    background-image: linear-gradient(#4caf50, #4caf50), linear-gradient(#D2D2D2, #D2D2D2); }
  .form-group.has-success label.control-label,
  .form-group.has-success .help-block {
    color: #4caf50; }
  .form-group.has-info .form-control {
    box-shadow: none; }
  .form-group.has-info.is-focused .form-control {
    background-image: linear-gradient(#00bcd4, #00bcd4), linear-gradient(#D2D2D2, #D2D2D2); }
  .form-group.has-info label.control-label,
  .form-group.has-info .help-block {
    color: #00bcd4; }
  .form-group textarea {
    resize: none; }
    .form-group textarea ~ .form-control-highlight {
      margin-top: -11px; }
  .form-group select {
    -webkit-appearance: none;
       -moz-appearance: none;
            appearance: none; }
    .form-group select ~ .material-input:after {
      display: none; }

.form-control::-moz-placeholder {
  font-size: 14px;
  line-height: 1.42857143;
  color: #AAAAAA;
  font-weight: 400; }

.form-control:-ms-input-placeholder {
  font-size: 14px;
  line-height: 1.42857143;
  color: #AAAAAA;
  font-weight: 400; }

.form-control::-webkit-input-placeholder {
  font-size: 14px;
  line-height: 1.42857143;
  color: #AAAAAA;
  font-weight: 400; }

.checkbox label,
.radio label,
label,
.label-on-left,
.label-on-right {
  font-size: 14px;
  line-height: 1.42857143;
  color: #AAAAAA;
  font-weight: 400; }

label.control-label {
  font-size: 11px;
  line-height: 1.07142857;
  color: #AAAAAA;
  font-weight: 400;
  margin: 16px 0 0 0; }

.help-block {
  margin-top: 0;
  font-size: 11px; }

.form-group {
  padding-bottom: 10px;
  margin: 20px 0 0 0; }
  .form-group .form-control::-moz-placeholder {
    font-size: 14px;
    line-height: 1.42857143;
    color: #AAAAAA;
    font-weight: 400; }
  .form-group .form-control:-ms-input-placeholder {
    font-size: 14px;
    line-height: 1.42857143;
    color: #AAAAAA;
    font-weight: 400; }
  .form-group .form-control::-webkit-input-placeholder {
    font-size: 14px;
    line-height: 1.42857143;
    color: #AAAAAA;
    font-weight: 400; }
  .form-group .checkbox label,
  .form-group .radio label,
  .form-group label,
  .form-group .label-on-left,
  .form-group .label-on-right {
    font-size: 14px;
    line-height: 1.42857143;
    color: #AAAAAA;
    font-weight: 400; }
  .form-group label.control-label {
    font-size: 11px;
    line-height: 1.07142857;
    color: #AAAAAA;
    font-weight: 400;
    margin: 16px 0 0 0; }
  .form-group .help-block {
    margin-top: 0;
    font-size: 11px; }
  .form-group.label-floating label.control-label, .form-group.label-placeholder label.control-label {
    top: -7px;
    font-size: 14px;
    line-height: 1.42857143; }
  .form-group.label-static label.control-label, .form-group.label-floating.is-focused label.control-label, .form-group.label-floating:not(.is-empty) label.control-label {
    top: -28px;
    left: 0;
    font-size: 11px;
    line-height: 1.07142857; }
  .form-group.label-floating input.form-control:-webkit-autofill ~ label.control-label label.control-label {
    top: -28px;
    left: 0;
    font-size: 11px;
    line-height: 1.07142857; }

.form-group.form-group-sm {
  padding-bottom: 10px;
  margin: 20px 0 0 0; }
  .form-group.form-group-sm .form-control::-moz-placeholder {
    font-size: 11px;
    line-height: 1.5;
    color: #AAAAAA;
    font-weight: 400; }
  .form-group.form-group-sm .form-control:-ms-input-placeholder {
    font-size: 11px;
    line-height: 1.5;
    color: #AAAAAA;
    font-weight: 400; }
  .form-group.form-group-sm .form-control::-webkit-input-placeholder {
    font-size: 11px;
    line-height: 1.5;
    color: #AAAAAA;
    font-weight: 400; }
  .form-group.form-group-sm .checkbox label,
  .form-group.form-group-sm .radio label,
  .form-group.form-group-sm label,
  .form-group.form-group-sm .label-on-left,
  .form-group.form-group-sm .label-on-right {
    font-size: 11px;
    line-height: 1.5;
    color: #AAAAAA;
    font-weight: 400; }
  .form-group.form-group-sm label.control-label {
    font-size: 9px;
    line-height: 1.125;
    color: #AAAAAA;
    font-weight: 400;
    margin: 16px 0 0 0; }
  .form-group.form-group-sm .help-block {
    margin-top: 0;
    font-size: 9px; }
  .form-group.form-group-sm.label-floating label.control-label, .form-group.form-group-sm.label-placeholder label.control-label {
    top: -11px;
    font-size: 11px;
    line-height: 1.5; }
  .form-group.form-group-sm.label-static label.control-label, .form-group.form-group-sm.label-floating.is-focused label.control-label, .form-group.form-group-sm.label-floating:not(.is-empty) label.control-label {
    top: -25px;
    left: 0;
    font-size: 9px;
    line-height: 1.125; }
  .form-group.form-group-sm.label-floating input.form-control:-webkit-autofill ~ label.control-label label.control-label {
    top: -25px;
    left: 0;
    font-size: 9px;
    line-height: 1.125; }

.form-group.form-group-lg {
  padding-bottom: 10px;
  margin: 20px 0 0 0; }
  .form-group.form-group-lg .form-control::-moz-placeholder {
    font-size: 18px;
    line-height: 1.3333333;
    color: #AAAAAA;
    font-weight: 400; }
  .form-group.form-group-lg .form-control:-ms-input-placeholder {
    font-size: 18px;
    line-height: 1.3333333;
    color: #AAAAAA;
    font-weight: 400; }
  .form-group.form-group-lg .form-control::-webkit-input-placeholder {
    font-size: 18px;
    line-height: 1.3333333;
    color: #AAAAAA;
    font-weight: 400; }
  .form-group.form-group-lg .checkbox label,
  .form-group.form-group-lg .radio label,
  .form-group.form-group-lg label,
  .form-group.form-group-lg .label-on-left,
  .form-group.form-group-lg .label-on-right {
    font-size: 18px;
    line-height: 1.3333333;
    color: #AAAAAA;
    font-weight: 400; }
  .form-group.form-group-lg label.control-label {
    font-size: 14px;
    line-height: 0.99999998;
    color: #AAAAAA;
    font-weight: 400;
    margin: 16px 0 0 0; }
  .form-group.form-group-lg .help-block {
    margin-top: 0;
    font-size: 14px; }
  .form-group.form-group-lg.label-floating label.control-label, .form-group.form-group-lg.label-placeholder label.control-label {
    top: -5px;
    font-size: 18px;
    line-height: 1.3333333; }
  .form-group.form-group-lg.label-static label.control-label, .form-group.form-group-lg.label-floating.is-focused label.control-label, .form-group.form-group-lg.label-floating:not(.is-empty) label.control-label {
    top: -32px;
    left: 0;
    font-size: 14px;
    line-height: 0.99999998; }
  .form-group.form-group-lg.label-floating input.form-control:-webkit-autofill ~ label.control-label label.control-label {
    top: -32px;
    left: 0;
    font-size: 14px;
    line-height: 0.99999998; }

select.form-control {
  border: 0;
  box-shadow: none;
  border-radius: 0; }
  .form-group.is-focused select.form-control {
    box-shadow: none;
    border-color: #D2D2D2; }
  select.form-control[multiple],
  .form-group.is-focused select.form-control[multiple] {
    height: 85px; }

.input-group-btn .btn {
  margin: 0 0 7px 0; }

.form-group.form-group-sm .input-group-btn .btn {
  margin: 0 0 3px 0; }

.form-group.form-group-lg .input-group-btn .btn {
  margin: 0 0 9px 0; }

.input-group .input-group-btn {
  padding: 0 12px; }

.input-group .input-group-addon {
  border: 0;
  background: transparent;
  padding: 6px 15px 0px; }

.form-group input[type=file] {
  opacity: 0;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 100; }

.form-control-feedback {
  opacity: 0; }
  .has-success .form-control-feedback {
    color: #4caf50;
    opacity: 1; }
  .has-error .form-control-feedback {
    color: #f44336;
    opacity: 1; }

.btn-file {
  position: relative;
  overflow: hidden;
  vertical-align: middle; }

.btn-file > input {
  position: absolute;
  top: 0;
  right: 0;
  width: 100%;
  height: 100%;
  margin: 0;
  font-size: 23px;
  cursor: pointer;
  filter: alpha(opacity=0);
  opacity: 0;
  direction: ltr; }

.fileinput {
  display: inline-block;
  margin-bottom: 9px; }

.fileinput .form-control {
  display: inline-block;
  padding-top: 7px;
  padding-bottom: 5px;
  margin-bottom: 0;
  vertical-align: middle;
  cursor: text; }

.fileinput .thumbnail {
  display: inline-block;
  margin-bottom: 10px;
  overflow: hidden;
  text-align: center;
  vertical-align: middle;
  max-width: 250px;
  box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2); }
  .fileinput .thumbnail.img-circle {
    border-radius: 50%;
    max-width: 100px; }

.fileinput .thumbnail > img {
  max-height: 100%; }

.fileinput .btn {
  vertical-align: middle; }

.fileinput-exists .fileinput-new,
.fileinput-new .fileinput-exists {
  display: none; }

.fileinput-inline .fileinput-controls {
  display: inline; }

.fileinput-filename {
  display: inline-block;
  overflow: hidden;
  vertical-align: middle; }

.form-control .fileinput-filename {
  vertical-align: bottom; }

.fileinput.input-group {
  display: table; }

.fileinput.input-group > * {
  position: relative;
  z-index: 2; }

.fileinput.input-group > .btn-file {
  z-index: 1; }

.fileinput-new.input-group .btn-file,
.fileinput-new .input-group .btn-file {
  border-radius: 0 4px 4px 0; }

.fileinput-new.input-group .btn-file.btn-xs,
.fileinput-new .input-group .btn-file.btn-xs,
.fileinput-new.input-group .btn-file.btn-sm,
.fileinput-new .input-group .btn-file.btn-sm {
  border-radius: 0 3px 3px 0; }

.fileinput-new.input-group .btn-file.btn-lg,
.fileinput-new .input-group .btn-file.btn-lg {
  border-radius: 0 6px 6px 0; }

.form-group.has-warning .fileinput .fileinput-preview {
  color: #ff9800; }

.form-group.has-warning .fileinput .thumbnail {
  border-color: #ff9800; }

.form-group.has-error .fileinput .fileinput-preview {
  color: #f44336; }

.form-group.has-error .fileinput .thumbnail {
  border-color: #f44336; }

.form-group.has-success .fileinput .fileinput-preview {
  color: #4caf50; }

.form-group.has-success .fileinput .thumbnail {
  border-color: #4caf50; }

.input-group-addon:not(:first-child) {
  border-left: 0; }

.thumbnail {
  border: 0 none;
  border-radius: 4px;
  padding: 0; }

.alert {
  border: 0;
  border-radius: 0;
  position: relative;
  padding: 20px 15px;
  line-height: 20px; }
  .alert b {
    font-weight: 500;
    text-transform: uppercase;
    font-size: 12px; }
  .alert, .alert.alert-default {
    background-color: white;
    color: #555555;
    border-radius: 3px;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 255, 255, 0.4); }
    .alert a, .alert .alert-link, .alert.alert-default a, .alert.alert-default .alert-link {
      color: #555555; }
  .alert.alert-inverse {
    background-color: #2e2e2e;
    color: #fff;
    border-radius: 3px;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(33, 33, 33, 0.4); }
    .alert.alert-inverse a, .alert.alert-inverse .alert-link {
      color: #fff; }
  .alert.alert-primary {
    background-color: #af2cc5;
    color: #ffffff;
    border-radius: 3px;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(156, 39, 176, 0.4); }
    .alert.alert-primary a, .alert.alert-primary .alert-link {
      color: #ffffff; }
  .alert.alert-success {
    background-color: #5cb860;
    color: #ffffff;
    border-radius: 3px;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(76, 175, 80, 0.4); }
    .alert.alert-success a, .alert.alert-success .alert-link {
      color: #ffffff; }
  .alert.alert-info {
    background-color: #00bcd4;
    color: #ffffff;
    border-radius: 3px;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(0, 188, 212, 0.4); }
    .alert.alert-info a, .alert.alert-info .alert-link {
      color: #ffffff; }
  .alert.alert-warning {
    background-color: #ffa21a;
    color: #ffffff;
    border-radius: 3px;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 152, 0, 0.4); }
    .alert.alert-warning a, .alert.alert-warning .alert-link {
      color: #ffffff; }
  .alert.alert-danger {
    background-color: #f55a4e;
    color: #ffffff;
    border-radius: 3px;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(244, 67, 54, 0.4); }
    .alert.alert-danger a, .alert.alert-danger .alert-link {
      color: #ffffff; }
  .alert.alert-rose {
    background-color: #eb3573;
    color: #ffffff;
    border-radius: 3px;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(233, 30, 99, 0.4); }
    .alert.alert-rose a, .alert.alert-rose .alert-link {
      color: #ffffff; }
  .alert-info, .alert-danger, .alert-warning, .alert-success, .alert-rose {
    color: #ffffff; }
  .alert-default a, .alert-default .alert-link {
    color: rgba(0,0,0, 0.87); }
  .alert span {
    display: block;
    max-width: 89%; }
  .alert.alert-danger i {
    color: #f44336; }
  .alert.alert-warning i {
    color: #ff9800; }
  .alert.alert-success i {
    color: #4caf50; }
  .alert.alert-info i {
    color: #00bcd4; }
  .alert.alert-primary i {
    color: #9c27b0; }
  .alert.alert-rose i {
    color: #e91e63; }
  .alert.alert-with-icon {
    margin-top: 43px;
    padding-left: 66px; }
    .alert.alert-with-icon i[data-notify="icon"] {
      display: block;
      left: 15px;
      position: absolute;
      margin-top: -39px;
      font-size: 20px;
      background-color: #FFFFFF;
      padding: 9px;
      border-radius: 50%;
      max-width: 38px;
      box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2); }
  .alert .close i {
    color: #FFFFFF; }
  .alert i[data-notify="icon"] {
    display: none; }
  .alert .alert-icon {
    display: block;
    float: left;
    margin-right: 15px; }
    .alert .alert-icon i {
      margin-top: -7px;
      top: 5px;
      position: relative; }
  .alert [data-notify="dismiss"] {
    margin-right: 5px; }

.table > thead > tr > th {
  border-bottom-width: 1px;
  font-size: 1.25em;
  font-weight: 300; }

.tab-pane .table tbody > tr > td:first-child {
  width: 36px; }

.table .radio,
.table .checkbox {
  margin-top: -1px;
  margin-bottom: 0;
  padding: 0;
  width: 15px; }
  .table .radio .icons,
  .table .checkbox .icons {
    position: relative; }

.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  padding: 12px 8px;
  vertical-align: middle; }

.table .th-description {
  max-width: 150px; }

.table .td-price {
  font-size: 26px;
  font-weight: 300;
  margin-top: 5px;
  text-align: right; }

.table .td-total {
  font-weight: 500;
  font-size: 1.25em;
  padding-top: 14px;
  text-align: right; }

.table .td-actions .btn {
  margin: 0px;
  padding: 5px; }

.table > tbody > tr {
  position: relative; }

.table .flag img {
  max-width: 18px;
  margin-top: -2px; }

.table-sales {
  margin-top: 40px; }

.table-shopping > thead > tr > th {
  font-size: 0.9em;
  text-transform: uppercase; }

.table-shopping > tbody > tr > td {
  font-size: 16px; }
  .table-shopping > tbody > tr > td b {
    display: block;
    margin-bottom: 5px; }

.table-shopping .td-name {
  font-weight: 400;
  font-size: 1.5em; }
  .table-shopping .td-name small {
    color: #999999;
    font-size: 0.75em;
    font-weight: 300; }

.table-shopping .td-number {
  font-weight: 300;
  font-size: 1.3em; }

.table-shopping .td-name {
  min-width: 200px; }
  .table-shopping .td-name a {
    color: #3C4858; }
    .table-shopping .td-name a:hover, .table-shopping .td-name a:focus {
      color: #9c27b0; }

.table-shopping .td-number {
  text-align: right;
  min-width: 145px; }
  .table-shopping .td-number small {
    margin-right: 3px; }

.table-shopping .img-container {
  width: 120px;
  max-height: 160px;
  overflow: hidden;
  display: block; }
  .table-shopping .img-container img {
    width: 100%; }

.star {
  color: red;
  padding-left: 3px; }

.form-category {
  padding: 10px 0 10px; }
  .form-category .checkbox {
    margin: 0; }

.form-group.form-checkbox {
  padding-top: 10px; }

form .form-footer .checkbox {
  padding-top: 5px; }

.card .form-horizontal .label-on-left {
  padding: 28px 5px 0 0;
  text-align: right; }

.card .form-horizontal .label-on-right {
  padding: 28px 0 0 5px;
  text-align: left; }

.form-horizontal .form-horizontal-checkbox {
  margin-top: 2px;
  margin-bottom: 10px; }

.form-horizontal .checkbox-radios .checkbox:first-child,
.form-horizontal .checkbox-radios .radio:first-child {
  margin-top: 16px; }

.form-horizontal .checkbox-radios .radio {
  padding-top: 10px; }

.form-horizontal .form-group {
  margin-left: 0;
  margin-right: 0; }

.form-horizontal .form-button {
  padding: 0;
  margin: 0; }

.form-horizontal .checkbox-inline {
  margin-top: 16px;
  padding-left: 0; }

.form-horizontal .radio label {
  padding-left: 28px; }
  .form-horizontal .radio label span {
    left: 2px; }

.form-horizontal label.control-label {
  margin: 0; }

.form-horizontal .form-control[type="password"] {
  padding-top: 8px;
  padding-bottom: 6px; }

.form-newsletter .input-group,
.form-newsletter .form-group {
  float: left;
  width: 78%;
  margin-right: 2%;
  margin-top: 9px; }

.form-newsletter .btn {
  float: left;
  width: 20%;
  margin: 9px 0 0; }

.checkbox label {
  cursor: pointer;
  padding-left: 0;
  color: rgba(0,0,0, 0.26); }
  .form-group.is-focused .checkbox label {
    color: rgba(0,0,0, 0.26); }
    .form-group.is-focused .checkbox label:hover, .form-group.is-focused .checkbox label:focus {
      color: rgba(0,0,0, .54); }
    fieldset[disabled] .form-group.is-focused .checkbox label {
      color: rgba(0,0,0, 0.26); }

.checkbox input[type=checkbox] {
  opacity: 0;
  position: absolute;
  margin: 0;
  z-index: -1;
  width: 0;
  height: 0;
  overflow: hidden;
  left: 0;
  pointer-events: none; }

.checkbox .checkbox-material {
  vertical-align: middle;
  position: relative;
  top: 3px;
  padding-right: 5px; }
  .checkbox .checkbox-material:before {
    display: block;
    position: absolute;
    left: 0;
    content: "";
    background-color: rgba(0, 0, 0, 0.84);
    height: 20px;
    width: 20px;
    border-radius: 100%;
    z-index: 1;
    opacity: 0;
    margin: 0;
    -webkit-transform: scale3d(2.3, 2.3, 1);
            transform: scale3d(2.3, 2.3, 1); }
  .checkbox .checkbox-material .check {
    position: relative;
    display: inline-block;
    width: 20px;
    height: 20px;
    border: 1px solid rgba(0,0,0, .54);
    overflow: hidden;
    z-index: 1;
    border-radius: 3px; }
  .checkbox .checkbox-material .check:before {
    position: absolute;
    content: "";
    -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
    display: block;
    margin-top: -3px;
    margin-left: 7px;
    width: 0;
    height: 0;
    background: red;
    box-shadow: 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0 inset;
    -webkit-animation: checkbox-off 0.3s forwards;
            animation: checkbox-off 0.3s forwards; }

.checkbox input[type=checkbox]:focus + .checkbox-material .check:after {
  opacity: 0.2; }

.checkbox input[type=checkbox]:checked + .checkbox-material .check {
  background: #9c27b0; }

.checkbox input[type=checkbox]:checked + .checkbox-material .check:before {
  color: #FFFFFF;
  box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 20px -12px 0 11px;
  -webkit-animation: checkbox-on 0.3s forwards;
          animation: checkbox-on 0.3s forwards; }

.checkbox input[type=checkbox]:checked + .checkbox-material:before {
  -webkit-animation: rippleOn 500ms;
          animation: rippleOn 500ms; }

.checkbox input[type=checkbox]:checked + .checkbox-material .check:after {
  -webkit-animation: rippleOn 500ms forwards;
          animation: rippleOn 500ms forwards; }

.checkbox input[type=checkbox]:not(:checked) + .checkbox-material:before {
  -webkit-animation: rippleOff 500ms;
          animation: rippleOff 500ms; }

.checkbox input[type=checkbox]:not(:checked) + .checkbox-material .check:after {
  -webkit-animation: rippleOff 500ms;
          animation: rippleOff 500ms; }

fieldset[disabled] .checkbox,
fieldset[disabled] .checkbox input[type=checkbox],
.checkbox input[type=checkbox][disabled] ~ .checkbox-material .check,
.checkbox input[type=checkbox][disabled] + .circle {
  opacity: 0.5; }

.checkbox input[type=checkbox][disabled] ~ .checkbox-material .check {
  border-color: #000000;
  opacity: .26; }

.checkbox input[type=checkbox][disabled] + .checkbox-material .check:after {
  background-color: rgba(0,0,0, 0.87);
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg); }

.checkbox.has-error label {
  color: #f44336; }

@-webkit-keyframes checkbox-on {
  0% {
    box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 15px 2px 0 11px; }
  50% {
    box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 20px 2px 0 11px; }
  100% {
    box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 20px -12px 0 11px; } }

@keyframes checkbox-on {
  0% {
    box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 15px 2px 0 11px; }
  50% {
    box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 20px 2px 0 11px; }
  100% {
    box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 20px -12px 0 11px; } }

@-webkit-keyframes rippleOn {
  0% {
    opacity: 0; }
  50% {
    opacity: 0.2; }
  100% {
    opacity: 0; } }

@keyframes rippleOn {
  0% {
    opacity: 0; }
  50% {
    opacity: 0.2; }
  100% {
    opacity: 0; } }

@-webkit-keyframes rippleOff {
  0% {
    opacity: 0; }
  50% {
    opacity: 0.2; }
  100% {
    opacity: 0; } }

@keyframes rippleOff {
  0% {
    opacity: 0; }
  50% {
    opacity: 0.2; }
  100% {
    opacity: 0; } }

.radio label {
  cursor: pointer;
  padding-left: 35px;
  position: relative;
  color: rgba(0,0,0, 0.26); }
  .form-group.is-focused .radio label {
    color: rgba(0,0,0, 0.26); }
    .form-group.is-focused .radio label:hover, .form-group.is-focused .radio label:focus {
      color: rgba(0,0,0, .54); }
    fieldset[disabled] .form-group.is-focused .radio label {
      color: rgba(0,0,0, 0.26); }
  .radio label span {
    display: block;
    position: absolute;
    left: 10px;
    top: 2px;
    transition-duration: 0.2s; }
  .radio label .circle {
    border: 1px solid rgba(0,0,0, .54);
    height: 15px;
    width: 15px;
    border-radius: 100%; }
  .radio label .check {
    height: 15px;
    width: 15px;
    border-radius: 100%;
    background-color: #9c27b0;
    -webkit-transform: scale3d(0, 0, 0);
            transform: scale3d(0, 0, 0); }
  .radio label .check:after {
    display: block;
    position: absolute;
    content: "";
    background-color: rgba(0,0,0, 0.87);
    left: -18px;
    top: -18px;
    height: 50px;
    width: 50px;
    border-radius: 100%;
    z-index: 1;
    opacity: 0;
    margin: 0;
    -webkit-transform: scale3d(1.5, 1.5, 1);
            transform: scale3d(1.5, 1.5, 1); }
  .radio label input[type=radio]:not(:checked) ~ .check:after {
    -webkit-animation: rippleOff 500ms;
            animation: rippleOff 500ms; }
  .radio label input[type=radio]:checked ~ .check:after {
    -webkit-animation: rippleOn 500ms;
            animation: rippleOn 500ms; }

.radio.has-error label {
  color: #f44336; }

.radio input[type=radio] {
  opacity: 0;
  height: 0;
  width: 0;
  overflow: hidden; }
  .radio input[type=radio]:checked ~ .check,
  .radio input[type=radio]:checked ~ .circle {
    opacity: 1; }
  .radio input[type=radio]:checked ~ .check {
    background-color: #9c27b0; }
  .radio input[type=radio]:checked ~ .circle {
    border-color: #9c27b0; }
  .radio input[type=radio]:checked ~ .check {
    -webkit-transform: scale3d(0.65, 0.65, 1);
            transform: scale3d(0.65, 0.65, 1); }

.radio input[type=radio][disabled] ~ .check,
.radio input[type=radio][disabled] ~ .circle {
  opacity: 0.26; }

.radio input[type=radio][disabled] ~ .check {
  background-color: #000000; }

.radio input[type=radio][disabled] ~ .circle {
  border-color: #000000; }

@keyframes rippleOn {
  0% {
    opacity: 0; }
  50% {
    opacity: 0.2; }
  100% {
    opacity: 0; } }

@keyframes rippleOff {
  0% {
    opacity: 0; }
  50% {
    opacity: 0.2; }
  100% {
    opacity: 0; } }

.progress {
  height: 4px;
  border-radius: 0;
  box-shadow: none;
  background: #DDDDDD; }
  .progress .progress-bar {
    box-shadow: none; }
    .progress .progress-bar, .progress .progress-bar.progress-bar-default {
      background-color: #FFFFFF; }
    .progress .progress-bar.progress-bar-inverse {
      background-color: #212121; }
    .progress .progress-bar.progress-bar-primary {
      background-color: #9c27b0; }
    .progress .progress-bar.progress-bar-success {
      background-color: #4caf50; }
    .progress .progress-bar.progress-bar-info {
      background-color: #00bcd4; }
    .progress .progress-bar.progress-bar-warning {
      background-color: #ff9800; }
    .progress .progress-bar.progress-bar-danger {
      background-color: #f44336; }
    .progress .progress-bar.progress-bar-rose {
      background-color: #e91e63; }
  .progress.progress-line-primary {
    background: rgba(156, 39, 176, 0.2); }
  .progress.progress-line-info {
    background: rgba(0, 188, 212, 0.2); }
  .progress.progress-line-success {
    background: rgba(76, 175, 80, 0.2); }
  .progress.progress-line-warning {
    background: rgba(255, 152, 0, 0.2); }
  .progress.progress-line-danger {
    background: rgba(244, 67, 54, 0.2); }

.progress .progress-bar,
.progress .progress-bar.progress-bar-default {
  background-color: #9c27b0; }

.togglebutton {
  vertical-align: middle; }
  .togglebutton, .togglebutton label, .togglebutton input, .togglebutton .toggle {
    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none; }
  .togglebutton label {
    cursor: pointer;
    color: rgba(0,0,0, 0.26); }
    .form-group.is-focused .togglebutton label {
      color: rgba(0,0,0, 0.26); }
      .form-group.is-focused .togglebutton label:hover, .form-group.is-focused .togglebutton label:focus {
        color: rgba(0,0,0, .54); }
      fieldset[disabled] .form-group.is-focused .togglebutton label {
        color: rgba(0,0,0, 0.26); }
    .togglebutton label input[type=checkbox] {
      opacity: 0;
      width: 0;
      height: 0; }
    .togglebutton label .toggle {
      text-align: left;
      margin-left: 5px; }
    .togglebutton label .toggle,
    .togglebutton label input[type=checkbox][disabled] + .toggle {
      content: "";
      display: inline-block;
      width: 30px;
      height: 15px;
      background-color: rgba(80, 80, 80, 0.7);
      border-radius: 15px;
      margin-right: 15px;
      transition: background 0.3s ease;
      vertical-align: middle; }
    .togglebutton label .toggle:after {
      content: "";
      display: inline-block;
      width: 20px;
      height: 20px;
      background-color: #FFFFFF;
      border-radius: 20px;
      position: relative;
      box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4);
      left: -5px;
      top: -3px;
      border: 1px solid rgba(0,0,0, .54);
      transition: left 0.3s ease, background 0.3s ease, box-shadow 0.1s ease; }
    .togglebutton label input[type=checkbox][disabled] + .toggle:after,
    .togglebutton label input[type=checkbox][disabled]:checked + .toggle:after {
      background-color: #BDBDBD; }
    .togglebutton label input[type=checkbox] + .toggle:active:after,
    .togglebutton label input[type=checkbox][disabled] + .toggle:active:after {
      box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 0, 0, 0.1); }
    .togglebutton label input[type=checkbox]:checked + .toggle:after {
      left: 15px; }
    .togglebutton label input[type=checkbox]:checked + .toggle {
      background-color: rgba(156, 39, 176, 0.7); }
    .togglebutton label input[type=checkbox]:checked + .toggle:after {
      border-color: #9c27b0; }
    .togglebutton label input[type=checkbox]:checked + .toggle:active:after {
      box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(156, 39, 176, 0.1); }

.wrapper {
  position: relative;
  top: 0;
  height: 100vh; }
  .wrapper:after {
    display: table;
    clear: both;
    content: " "; }
  .wrapper.wrapper-full-page {
    height: auto;
    min-height: 100vh; }

.full-page:after, .full-page:before {
  display: block;
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 2; }

.full-page:before {
  background-color: rgba(0, 0, 0, 0.5); }

.full-page[filter-color="purple"]:after, .full-page[filter-color="primary"]:after {
  background: rgba(225, 190, 231, 0.56);
  /* For browsers that do not support gradients */
  /* For Safari 5.1 to 6.0 */
  /* For Opera 11.1 to 12.0 */
  /* For Firefox 3.6 to 15 */
  background: linear-gradient(60deg, rgba(225, 190, 231, 0.56), rgba(186, 104, 200, 0.95));
  /* Standard syntax */ }

.full-page[filter-color="purple"].lock-page .form-group .form-control, .full-page[filter-color="primary"].lock-page .form-group .form-control {
  background-image: linear-gradient(#9c27b0, #9c27b0), linear-gradient(#D2D2D2, #D2D2D2); }

.full-page[filter-color="blue"]:after, .full-page[filter-color="info"]:after {
  background: rgba(178, 235, 242, 0.56);
  /* For browsers that do not support gradients */
  /* For Safari 5.1 to 6.0 */
  /* For Opera 11.1 to 12.0 */
  /* For Firefox 3.6 to 15 */
  background: linear-gradient(60deg, rgba(178, 235, 242, 0.56), rgba(77, 208, 225, 0.95));
  /* Standard syntax */ }

.full-page[filter-color="blue"].lock-page .form-group .form-control, .full-page[filter-color="info"].lock-page .form-group .form-control {
  background-image: linear-gradient(#00bcd4, #00bcd4), linear-gradient(#D2D2D2, #D2D2D2); }

.full-page[filter-color="green"]:after, .full-page[filter-color="success"]:after {
  background: rgba(165, 214, 167, 0.56);
  /* For browsers that do not support gradients */
  /* For Safari 5.1 to 6.0 */
  /* For Opera 11.1 to 12.0 */
  /* For Firefox 3.6 to 15 */
  background: linear-gradient(60deg, rgba(165, 214, 167, 0.56), rgba(102, 187, 106, 0.95));
  /* Standard syntax */ }

.full-page[filter-color="green"].lock-page .form-group .form-control, .full-page[filter-color="success"].lock-page .form-group .form-control {
  background-image: linear-gradient(#4caf50, #4caf50), linear-gradient(#D2D2D2, #D2D2D2); }

.full-page[filter-color="orange"]:after, .full-page[filter-color="warning"]:after {
  background: rgba(255, 224, 178, 0.56);
  /* For browsers that do not support gradients */
  /* For Safari 5.1 to 6.0 */
  /* For Opera 11.1 to 12.0 */
  /* For Firefox 3.6 to 15 */
  background: linear-gradient(60deg, rgba(255, 224, 178, 0.56), rgba(255, 183, 77, 0.95));
  /* Standard syntax */ }

.full-page[filter-color="orange"].lock-page .form-group .form-control, .full-page[filter-color="warning"].lock-page .form-group .form-control {
  background-image: linear-gradient(#ff9800, #ff9800), linear-gradient(#D2D2D2, #D2D2D2); }

.full-page[filter-color="red"]:after, .full-page[filter-color="danger"]:after {
  background: rgba(239, 154, 154, 0.56);
  /* For browsers that do not support gradients */
  /* For Safari 5.1 to 6.0 */
  /* For Opera 11.1 to 12.0 */
  /* For Firefox 3.6 to 15 */
  background: linear-gradient(60deg, rgba(239, 154, 154, 0.56), rgba(239, 83, 80, 0.95));
  /* Standard syntax */ }

.full-page[filter-color="red"].lock-page .form-group .form-control, .full-page[filter-color="danger"].lock-page .form-group .form-control {
  background-image: linear-gradient(#f44336, #f44336), linear-gradient(#D2D2D2, #D2D2D2); }

.full-page[filter-color="rose"]:after {
  background: rgba(248, 187, 208, 0.56);
  /* For browsers that do not support gradients */
  /* For Safari 5.1 to 6.0 */
  /* For Opera 11.1 to 12.0 */
  /* For Firefox 3.6 to 15 */
  background: linear-gradient(60deg, rgba(248, 187, 208, 0.56), rgba(240, 98, 146, 0.95));
  /* Standard syntax */ }

.full-page[filter-color="rose"].lock-page .form-group .form-control {
  background-image: linear-gradient(#e91e63, #e91e63), linear-gradient(#D2D2D2, #D2D2D2); }

.full-page[data-image]:after {
  opacity: .8; }

.full-page > .content,
.full-page > .footer {
  position: relative;
  z-index: 4; }

.full-page > .content {
  min-height: calc(100vh - 80px); }

.full-page .full-page-background {
  position: absolute;
  z-index: 1;
  height: 100%;
  width: 100%;
  display: block;
  top: 0;
  left: 0;
  background-size: cover;
  background-position: center center; }

.full-page .footer nav > ul a:not(.btn),
.full-page .footer,
.full-page .footer .copyright a {
  color: #FFFFFF; }

.clear-filter:before {
  display: none; }

.login-page > .content,
.lock-page > .content {
  padding-top: 18vh; }

.login-page .card-login {
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
  border-radius: 6px;
  padding-bottom: 20px;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0); }
  .login-page .card-login.card-hidden {
    opacity: 0;
    -webkit-transform: translate3d(0, -60px, 0);
    transform: translate3d(0, -60px, 0); }
  .login-page .card-login .btn-wd {
    min-width: 180px; }
  .login-page .card-login .card-header {
    margin-top: -40px;
    margin-bottom: 20px; }
    .login-page .card-login .card-header .title {
      margin-top: 10px; }

.lock-page .card-profile {
  width: 240px;
  margin: 60px auto 0;
  color: #FFFFFF;
  position: absolute;
  left: 0;
  right: 0;
  display: block;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0); }
  .lock-page .card-profile.card-hidden {
    opacity: 0;
    -webkit-transform: translate3d(0, -60px, 0);
    transform: translate3d(0, -60px, 0); }
  .lock-page .card-profile .card-avatar {
    max-width: 90px;
    max-height: 90px;
    margin-top: -45px; }
  .lock-page .card-profile .card-footer {
    border: none;
    padding-top: 0; }
  .lock-page .card-profile .form-group {
    text-align: left; }
    .lock-page .card-profile .form-group .form-control {
      background-image: linear-gradient(#e91e63, #e91e63), linear-gradient(#D2D2D2, #D2D2D2); }
  .lock-page .card-profile.with-animation {
    transition: all 300ms ease-in; }

.register-page .card-signup {
  border-radius: 6px;
  box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
  margin-bottom: 100px;
  padding: 40px 0px; }
  .register-page .card-signup .info {
    max-width: 360px;
    margin: 0 auto;
    padding: 0px; }
    .register-page .card-signup .info .info-title {
      color: #3C4858;
      margin: 30px 0 15px; }
  .register-page .card-signup .checkbox {
    margin-top: 20px;
    margin-bottom: 0; }
    .register-page .card-signup .checkbox label {
      margin-left: 17px; }
    .register-page .card-signup .checkbox .checkbox-material {
      padding-right: 20px; }
  .register-page .card-signup .input-group .input-group-addon {
    padding-top: 21px; }
  .register-page .card-signup .info-horizontal .icon {
    float: left;
    margin-top: 24px;
    margin-right: 10px; }
    .register-page .card-signup .info-horizontal .icon i {
      font-size: 2.6em; }
    .register-page .card-signup .info-horizontal .icon.icon-primary {
      color: #9c27b0; }
    .register-page .card-signup .info-horizontal .icon.icon-info {
      color: #00bcd4; }
    .register-page .card-signup .info-horizontal .icon.icon-success {
      color: #4caf50; }
    .register-page .card-signup .info-horizontal .icon.icon-warning {
      color: #ff9800; }
    .register-page .card-signup .info-horizontal .icon.icon-danger {
      color: #f44336; }
    .register-page .card-signup .info-horizontal .icon.icon-rose {
      color: #e91e63; }
  .register-page .card-signup .info-horizontal .description {
    overflow: hidden; }
  .register-page .card-signup .form-group {
    margin: 27px 0 0 7px;
    padding-bottom: 0; }

.register-page .content {
  position: relative;
  z-index: 3;
  padding-top: 15vh;
  min-height: calc(100vh - 80px); }

.register-page .footer .container {
  padding: 0; }

.pricing-page .title {
  color: #FFFFFF;
  margin-top: 13vh; }

.pricing-page .section-space {
  display: block;
  height: 70px; }

.pricing-page .card-plain .icon i,
.pricing-page .card-plain .card-title {
  color: #FFFFFF; }

.pricing-page .description {
  color: #FFFFFF; }

.pricing-page.full-page:before {
  background-color: rgba(0, 0, 0, 0.65); }

/*
 * bootstrap-tagsinput v0.8.0
 *
 */
.ng2-tag-input.filled-theme {
  display: block;
  position: relative;
  cursor: text;
  border-bottom: 1px solid #cecece; }
  .ng2-tag-input.filled-theme:focus {
    outline: 0; }
  .ng2-tag-input.filled-theme.ng2-tag-input--dropping {
    opacity: 0.7; }
  .ng2-tag-input.filled-theme.ng2-tag-input--loading {
    border: none; }
  .ng2-tag-input.filled-theme.ng2-tag-input--disabled {
    opacity: 0.5;
    cursor: not-allowed; }

.ng2-tag-input.filled-theme tag {
  font-weight: 500;
  font-size: 0.75em;
  color: #FFFFFF;
  border-radius: 12px;
  margin: 8px 3px 5px 0px;
  padding: 5px 8px;
  line-height: 1.5em;
  text-transform: uppercase;
  height: 24px;
  white-space: nowrap;
  display: inline-block;
  cursor: pointer;
  position: relative;
  background-color: #9c27b0; }
  .ng2-tag-input.filled-theme tag.readonly {
    cursor: default; }
  .ng2-tag-input.filled-theme tag.readonly:focus, .ng2-tag-input.filled-theme tag:focus {
    outline: 0; }
  .ng2-tag-input.filled-theme tag.tag--editing {
    cursor: text; }
  .ng2-tag-input.filled-theme tag[_ngcontent-c1]:not(:focus):not(.tag--editing):not(:active):not(.readonly):hover {
    background: #00bcd4;
    color: #ffffff; }
  .ng2-tag-input.filled-theme tag[_nghost-c3]:hover,
  .ng2-tag-input.filled-theme tag:hover [_nghost-c3] {
    transition: all 150ms ease-in; }
  .ng2-tag-input.filled-theme tag[_nghost-c3]:hover svg,
  .ng2-tag-input.filled-theme tag:hover [_nghost-c3] svg,
  .ng2-tag-input.filled-theme tag[_nghost-c3]:hover delete-icon,
  .ng2-tag-input.filled-theme tag:hover [_nghost-c3] delete-icon {
    display: block;
    right: 10px; }
  .ng2-tag-input.filled-theme tag[_ngcontent-c1]:not(.readonly):not(.tag--editing):active, .ng2-tag-input.filled-theme tag[_ngcontent-c1]:not(.readonly):not(.tag--editing):focus {
    background: #00bcd4;
    color: #fff; }

.ng2-tag-input.filled-theme tag delete-icon {
  display: none;
  text-align: right;
  -webkit-transform: none;
          transform: none; }
  .ng2-tag-input.filled-theme tag delete-icon path {
    fill: #ffffff; }
  .ng2-tag-input.filled-theme tag delete-icon svg {
    vertical-align: middle;
    height: 13px;
    display: none;
    position: absolute;
    right: 0;
    top: 5px; }

tag-input {
  display: inline-block;
  padding: 4px 6px;
  max-width: 100%;
  line-height: 22px; }

tag[_ngcontent-c4]:not(:focus):not(.tag--editing):not(:active):not(.readonly):hover {
  background-color: #9c27b0 !important;
  color: #FFFFFF !important; }

[_nghost-c6] {
  display: none; }

.timeline {
  list-style: none;
  padding: 20px 0 20px;
  position: relative;
  margin-top: 30px; }
  .timeline:before {
    top: 50px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 3px;
    background-color: #E5E5E5;
    left: 50%;
    margin-left: -1px; }
  .timeline h6 {
    color: #333333;
    font-weight: 400;
    margin: 10px 0px 0px; }
  .timeline.timeline-simple {
    margin-top: 30px;
    padding: 0 0 20px; }
    .timeline.timeline-simple:before {
      left: 5%;
      background-color: #E5E5E5; }
    .timeline.timeline-simple > li > .timeline-panel {
      width: 86%; }
    .timeline.timeline-simple > li > .timeline-badge {
      left: 5%; }
  .timeline > li {
    margin-bottom: 20px;
    position: relative; }
    .timeline > li:before, .timeline > li:after {
      content: " ";
      display: table; }
    .timeline > li:after {
      clear: both; }
  .timeline > li > .timeline-panel {
    width: 45%;
    float: left;
    padding: 20px;
    margin-bottom: 20px;
    position: relative;
    box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
    border-radius: 6px;
    color: rgba(0,0,0, 0.87);
    background: #fff; }
    .timeline > li > .timeline-panel:before {
      position: absolute;
      top: 26px;
      right: -15px;
      display: inline-block;
      border-top: 15px solid transparent;
      border-left: 15px solid #e4e4e4;
      border-right: 0 solid #e4e4e4;
      border-bottom: 15px solid transparent;
      content: " "; }
    .timeline > li > .timeline-panel:after {
      position: absolute;
      top: 27px;
      right: -14px;
      display: inline-block;
      border-top: 14px solid transparent;
      border-left: 14px solid #FFFFFF;
      border-right: 0 solid #FFFFFF;
      border-bottom: 14px solid transparent;
      content: " "; }
  .timeline > li > .timeline-badge {
    color: #FFFFFF;
    width: 50px;
    height: 50px;
    line-height: 51px;
    font-size: 1.4em;
    text-align: center;
    position: absolute;
    top: 16px;
    left: 50%;
    margin-left: -24px;
    z-index: 100;
    border-top-right-radius: 50%;
    border-top-left-radius: 50%;
    border-bottom-right-radius: 50%;
    border-bottom-left-radius: 50%; }
    .timeline > li > .timeline-badge.primary {
      background-color: #9c27b0;
      box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(156, 39, 176, 0.4); }
    .timeline > li > .timeline-badge.success {
      background-color: #4caf50;
      box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(76, 175, 80, 0.4); }
    .timeline > li > .timeline-badge.warning {
      background-color: #ff9800;
      box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 152, 0, 0.4); }
    .timeline > li > .timeline-badge.info {
      background-color: #00bcd4;
      box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(0, 188, 212, 0.4); }
    .timeline > li > .timeline-badge.danger {
      background-color: #f44336;
      box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(244, 67, 54, 0.4); }
    .timeline > li > .timeline-badge [class^="ti-"],
    .timeline > li > .timeline-badge [class*=" ti-"],
    .timeline > li > .timeline-badge [class="material-icons"] {
      line-height: inherit; }
  .timeline > li.timeline-inverted > .timeline-panel {
    float: right;
    background-color: #FFFFFF; }
    .timeline > li.timeline-inverted > .timeline-panel:before {
      border-left-width: 0;
      border-right-width: 15px;
      left: -15px;
      right: auto; }
    .timeline > li.timeline-inverted > .timeline-panel:after {
      border-left-width: 0;
      border-right-width: 14px;
      left: -14px;
      right: auto; }

.timeline-heading {
  margin-bottom: 15px; }

.timeline-title {
  margin-top: 0;
  color: inherit; }

.timeline-body hr {
  margin-top: 10px;
  margin-bottom: 5px; }

.timeline-body .btn {
  margin-bottom: 0; }

.timeline-body > p,
.timeline-body > ul {
  margin-bottom: 0; }

.timeline-body > p + p {
  margin-top: 5px; }

.withripple {
  position: relative; }

.ripple-container {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  width: 100%;
  height: 100%;
  overflow: hidden;
  border-radius: inherit;
  pointer-events: none; }
  .disabled .ripple-container {
    display: none; }

.ripple {
  position: absolute;
  width: 20px;
  height: 20px;
  margin-left: -10px;
  margin-top: -10px;
  border-radius: 100%;
  background-color: #000;
  background-color: rgba(0, 0, 0, 0.05);
  -webkit-transform: scale(1);
          transform: scale(1);
  -webkit-transform-origin: 50%;
          transform-origin: 50%;
  opacity: 0;
  pointer-events: none; }

.ripple.ripple-on {
  transition: opacity 0.15s ease-in 0s, -webkit-transform 0.5s cubic-bezier(0.4, 0, 0.2, 1) 0.1s;
  transition: opacity 0.15s ease-in 0s, transform 0.5s cubic-bezier(0.4, 0, 0.2, 1) 0.1s;
  transition: opacity 0.15s ease-in 0s, transform 0.5s cubic-bezier(0.4, 0, 0.2, 1) 0.1s, -webkit-transform 0.5s cubic-bezier(0.4, 0, 0.2, 1) 0.1s;
  opacity: 0.1; }

.ripple.ripple-out {
  transition: opacity 0.1s linear 0s !important;
  opacity: 0; }

.panel {
  background-color: transparent;
  border: 0 none;
  box-shadow: none; }
  .panel .panel-heading {
    background-color: transparent;
    border-bottom: 1px solid #ddd;
    padding: 25px 10px 5px 0px; }
    .panel .panel-heading .panel-title {
      font-size: 15px;
      font-weight: bolder; }
    .panel .panel-heading a {
      color: #3C4858; }
      .panel .panel-heading a:hover, .panel .panel-heading a:active, .panel .panel-heading a[aria-expanded="true"] {
        color: #e91e63; }
      .panel .panel-heading a[aria-expanded="true"] .panel-title > i, .panel .panel-heading a.expanded .panel-title > i {
        filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg); }
    .panel .panel-heading i {
      float: right; }
  .panel .panel-body {
    border: 0 none;
    padding: 15px 0px 5px; }
  .panel.panel-default .panel-heading + .panel-collapse .panel-body {
    border: 0 none; }

.pagination > li > a,
.pagination > li > span {
  border: 0;
  border-radius: 30px !important;
  transition: all .3s;
  padding: 0px 11px;
  margin: 0 3px;
  min-width: 30px;
  height: 30px;
  line-height: 30px;
  color: #999999;
  font-weight: 400;
  font-size: 12px;
  text-transform: uppercase;
  background: transparent; }
  .pagination > li > a:hover, .pagination > li > a:focus,
  .pagination > li > span:hover,
  .pagination > li > span:focus {
    color: #999999; }

.pagination > .active > a,
.pagination > .active > span {
  color: #999999;
  text-align: center; }
  .pagination > .active > a, .pagination > .active > a:focus, .pagination > .active > a:hover,
  .pagination > .active > span,
  .pagination > .active > span:focus,
  .pagination > .active > span:hover {
    background-color: #9c27b0;
    border-color: #9c27b0;
    color: #FFFFFF;
    box-shadow: 0 4px 5px 0 rgba(156, 39, 176, 0.14), 0 1px 10px 0 rgba(156, 39, 176, 0.12), 0 2px 4px -1px rgba(156, 39, 176, 0.2); }

.pagination.pagination-info > .active > a, .pagination.pagination-info > .active > a:focus, .pagination.pagination-info > .active > a:hover,
.pagination.pagination-info > .active > span,
.pagination.pagination-info > .active > span:focus,
.pagination.pagination-info > .active > span:hover {
  background-color: #00bcd4;
  border-color: #00bcd4;
  box-shadow: 0 4px 5px 0 rgba(0, 188, 212, 0.14), 0 1px 10px 0 rgba(0, 188, 212, 0.12), 0 2px 4px -1px rgba(0, 188, 212, 0.2); }

.pagination.pagination-success > .active > a, .pagination.pagination-success > .active > a:focus, .pagination.pagination-success > .active > a:hover,
.pagination.pagination-success > .active > span,
.pagination.pagination-success > .active > span:focus,
.pagination.pagination-success > .active > span:hover {
  background-color: #4caf50;
  border-color: #4caf50;
  box-shadow: 0 4px 5px 0 rgba(76, 175, 80, 0.14), 0 1px 10px 0 rgba(76, 175, 80, 0.12), 0 2px 4px -1px rgba(76, 175, 80, 0.2); }

.pagination.pagination-warning > .active > a, .pagination.pagination-warning > .active > a:focus, .pagination.pagination-warning > .active > a:hover,
.pagination.pagination-warning > .active > span,
.pagination.pagination-warning > .active > span:focus,
.pagination.pagination-warning > .active > span:hover {
  background-color: #ff9800;
  border-color: #ff9800;
  box-shadow: 0 4px 5px 0 rgba(255, 152, 0, 0.14), 0 1px 10px 0 rgba(255, 152, 0, 0.12), 0 2px 4px -1px rgba(255, 152, 0, 0.2); }

.pagination.pagination-danger > .active > a, .pagination.pagination-danger > .active > a:focus, .pagination.pagination-danger > .active > a:hover,
.pagination.pagination-danger > .active > span,
.pagination.pagination-danger > .active > span:focus,
.pagination.pagination-danger > .active > span:hover {
  background-color: #f44336;
  border-color: #f44336;
  box-shadow: 0 4px 5px 0 rgba(244, 67, 54, 0.14), 0 1px 10px 0 rgba(244, 67, 54, 0.12), 0 2px 4px -1px rgba(244, 67, 54, 0.2); }

.label {
  border-radius: 12px;
  padding: 5px 12px;
  text-transform: uppercase;
  font-size: 10px; }
  .label.label-default {
    background-color: #999999; }

.section-dark .nav-pills > li > a,
.section-image .nav-pills > li > a {
  color: #999999; }

.section-dark .nav-pills > li > a:hover,
.section-dark .nav-pills > li > a:focus,
.section-image .nav-pills > li > a:hover,
.section-image .nav-pills > li > a:focus {
  background-color: #EEEEEE; }

.nav-pills > li > a {
  line-height: 24px;
  text-transform: uppercase;
  font-size: 12px;
  font-weight: 500;
  min-width: 100px;
  text-align: center;
  color: #555555;
  transition: all .3s; }
  .nav-pills > li > a:hover {
    background-color: rgba(200, 200, 200, 0.2); }

.nav-pills > li i {
  display: block;
  font-size: 30px;
  padding: 15px 0; }

.nav-pills > li.active > a, .nav-pills > li.active > a:focus, .nav-pills > li.active > a:hover {
  background-color: #9c27b0;
  color: #FFFFFF;
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(156, 39, 176, 0.4); }

.nav-pills:not(.nav-pills-icons) > li > a {
  border-radius: 30px; }

.nav-pills.nav-stacked > li + li {
  margin: 10px 0; }

.nav-pills.nav-pills-info > li.active > a, .nav-pills.nav-pills-info > li.active > a:focus, .nav-pills.nav-pills-info > li.active > a:hover {
  background-color: #00bcd4;
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(0, 188, 212, 0.4); }

.nav-pills.nav-pills-success > li.active > a, .nav-pills.nav-pills-success > li.active > a:focus, .nav-pills.nav-pills-success > li.active > a:hover {
  background-color: #4caf50;
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(76, 175, 80, 0.4); }

.nav-pills.nav-pills-warning > li.active > a, .nav-pills.nav-pills-warning > li.active > a:focus, .nav-pills.nav-pills-warning > li.active > a:hover {
  background-color: #ff9800;
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 152, 0, 0.4); }

.nav-pills.nav-pills-danger > li.active > a, .nav-pills.nav-pills-danger > li.active > a:focus, .nav-pills.nav-pills-danger > li.active > a:hover {
  background-color: #f44336;
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 152, 0, 0.4); }

.nav-pills.nav-pills-rose > li.active > a, .nav-pills.nav-pills-rose > li.active > a:focus, .nav-pills.nav-pills-rose > li.active > a:hover {
  background-color: #e91e63;
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(233, 30, 99, 0.4); }

.tab-space {
  padding: 20px 0; }

.modal-content {
  box-shadow: 0 27px 24px 0 rgba(0, 0, 0, 0.2), 0 40px 77px 0 rgba(0, 0, 0, 0.22);
  border-radius: 6px;
  border: none; }
  .modal-content .modal-header {
    border-bottom: none;
    padding-top: 24px;
    padding-right: 24px;
    padding-bottom: 0;
    padding-left: 24px; }
  .modal-content .modal-body {
    padding-top: 24px;
    padding-right: 24px;
    padding-bottom: 16px;
    padding-left: 24px; }
  .modal-content .modal-footer {
    border-top: none; }
    .modal-content .modal-footer.text-center {
      text-align: center; }
    .modal-content .modal-footer button {
      margin: 0;
      padding-left: 16px;
      padding-right: 16px;
      width: auto; }
      .modal-content .modal-footer button.pull-left {
        padding-left: 5px;
        padding-right: 5px;
        position: relative;
        left: -5px; }
    .modal-content .modal-footer button + button {
      margin-bottom: 16px; }
  .modal-content .modal-body + .modal-footer {
    padding-top: 0; }

.modal-backdrop {
  background: rgba(0, 0, 0, 0.3); }

.modal .modal-dialog {
  margin-top: 100px; }

.modal .modal-header .close {
  color: #999999; }
  .modal .modal-header .close:hover, .modal .modal-header .close:focus {
    opacity: 1; }
  .modal .modal-header .close i {
    font-size: 16px; }

.modal-notice .instruction {
  margin-bottom: 25px; }

.modal-notice .picture {
  max-width: 150px; }

.modal-notice .modal-content .btn-raised {
  margin-bottom: 15px; }

.modal-small {
  width: 300px;
  margin: 0 auto; }
  .modal-small .modal-body {
    margin-top: 20px; }

.navbar {
  border: 0;
  border-radius: 3px;
  padding: 10px 0; }
  .navbar .navbar-brand {
    position: relative;
    height: 50px;
    line-height: 30px;
    color: inherit;
    padding: 10px 15px; }
    .navbar .navbar-brand:hover, .navbar .navbar-brand:focus {
      color: inherit;
      background-color: transparent; }
  .navbar .navbar-minimize {
    float: left;
    padding: 3px 0 0 15px; }
  .navbar .notification {
    position: absolute;
    top: 5px;
    border: 1px solid #FFF;
    right: 10px;
    font-size: 9px;
    background: #f44336;
    color: #FFFFFF;
    min-width: 20px;
    padding: 0px 5px;
    height: 20px;
    border-radius: 10px;
    text-align: center;
    line-height: 19px;
    vertical-align: middle;
    display: block; }
  .navbar .navbar-text {
    color: inherit;
    margin-top: 15px;
    margin-bottom: 15px; }
  .navbar .navbar-nav > li > a {
    color: inherit;
    padding-top: 15px;
    padding-bottom: 15px;
    font-weight: 500;
    font-size: 12px;
    text-transform: uppercase;
    border-radius: 3px; }
    .navbar .navbar-nav > li > a:hover, .navbar .navbar-nav > li > a:focus {
      color: inherit;
      background-color: transparent; }
    .navbar .navbar-nav > li > a .material-icons,
    .navbar .navbar-nav > li > a .fa {
      font-size: 20px; }
    .navbar .navbar-nav > li > a.btn:not(.btn-just-icon) .fa {
      position: relative;
      top: 2px;
      margin-top: -4px;
      margin-right: 4px; }
  .navbar .navbar-nav > li > .dropdown-menu {
    -webkit-transform: translate3d(0, -20px, 0);
    transform: translate3d(0, -20px, 0); }
  .navbar .navbar-nav > li.open > .dropdown-menu {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); }
  .navbar .navbar-nav > .active > a, .navbar .navbar-nav > .active > a:hover, .navbar .navbar-nav > .active > a:focus {
    color: inherit;
    background-color: rgba(255, 255, 255, 0.1); }
  .navbar .navbar-nav > .disabled > a, .navbar .navbar-nav > .disabled > a:hover, .navbar .navbar-nav > .disabled > a:focus {
    color: inherit;
    background-color: transparent;
    opacity: 0.9; }
  .navbar .navbar-nav .profile-photo {
    padding: 0 5px 0; }
    .navbar .navbar-nav .profile-photo .profile-photo-small {
      height: 40px;
      width: 40px; }
  .navbar .navbar-toggle {
    border: 0; }
    .navbar .navbar-toggle:hover, .navbar .navbar-toggle:focus {
      background-color: transparent; }
    .navbar .navbar-toggle .icon-bar {
      background-color: inherit;
      border: 1px solid; }
  .navbar .navbar-default .navbar-toggle,
  .navbar .navbar-inverse .navbar-toggle {
    border-color: transparent; }
  .navbar .navbar-collapse,
  .navbar .navbar-form {
    border-top: none;
    box-shadow: none; }
  .navbar .navbar-nav > .open > a, .navbar .navbar-nav > .open > a:hover, .navbar .navbar-nav > .open > a:focus {
    background-color: transparent;
    color: inherit; }
  @media (max-width: 767px) {
    .navbar .navbar-nav .navbar-text {
      color: inherit;
      margin-top: 15px;
      margin-bottom: 15px; }
    .navbar .navbar-nav .open .dropdown-menu > .dropdown-header {
      border: 0;
      color: inherit; }
    .navbar .navbar-nav .open .dropdown-menu .divider {
      border-bottom: 1px solid;
      opacity: 0.08; }
    .navbar .navbar-nav .open .dropdown-menu > li > a {
      color: inherit; }
      .navbar .navbar-nav .open .dropdown-menu > li > a:hover, .navbar .navbar-nav .open .dropdown-menu > li > a:focus {
        color: inherit;
        background-color: transparent; }
    .navbar .navbar-nav .open .dropdown-menu > .active > a, .navbar .navbar-nav .open .dropdown-menu > .active > a:hover, .navbar .navbar-nav .open .dropdown-menu > .active > a:focus {
      color: inherit;
      background-color: transparent; }
    .navbar .navbar-nav .open .dropdown-menu > .disabled > a, .navbar .navbar-nav .open .dropdown-menu > .disabled > a:hover, .navbar .navbar-nav .open .dropdown-menu > .disabled > a:focus {
      color: inherit;
      background-color: transparent; } }
  .navbar.navbar-default .logo-container .brand {
    color: #555555; }
  .navbar .navbar-link {
    color: inherit; }
    .navbar .navbar-link:hover {
      color: inherit; }
  .navbar .btn {
    margin-top: 0;
    margin-bottom: 0; }
  .navbar .btn-link {
    color: inherit; }
    .navbar .btn-link:hover, .navbar .btn-link:focus {
      color: inherit; }
    .navbar .btn-link[disabled]:hover, .navbar .btn-link[disabled]:focus,
    fieldset[disabled] .navbar .btn-link:hover,
    fieldset[disabled] .navbar .btn-link:focus {
      color: inherit; }
  .navbar .navbar-form {
    margin: 4px 0 0; }
    .navbar .navbar-form .form-group {
      margin: 0;
      padding: 0; }
      .navbar .navbar-form .form-group .material-input:before,
      .navbar .navbar-form .form-group.is-focused .material-input:after {
        background-color: inherit; }
    .navbar .navbar-form .form-group .form-control,
    .navbar .navbar-form .form-control {
      border-color: inherit;
      color: inherit;
      padding: 0;
      margin: 0;
      height: 28px;
      font-size: 14px;
      line-height: 1.42857143; }
  .navbar, .navbar.navbar-default {
    background-color: #FFFFFF;
    color: #555555; }
    .navbar .navbar-form .form-group input.form-control::-moz-placeholder,
    .navbar .navbar-form input.form-control::-moz-placeholder, .navbar.navbar-default .navbar-form .form-group input.form-control::-moz-placeholder,
    .navbar.navbar-default .navbar-form input.form-control::-moz-placeholder {
      color: #555555; }
    .navbar .navbar-form .form-group input.form-control:-ms-input-placeholder,
    .navbar .navbar-form input.form-control:-ms-input-placeholder, .navbar.navbar-default .navbar-form .form-group input.form-control:-ms-input-placeholder,
    .navbar.navbar-default .navbar-form input.form-control:-ms-input-placeholder {
      color: #555555; }
    .navbar .navbar-form .form-group input.form-control::-webkit-input-placeholder,
    .navbar .navbar-form input.form-control::-webkit-input-placeholder, .navbar.navbar-default .navbar-form .form-group input.form-control::-webkit-input-placeholder,
    .navbar.navbar-default .navbar-form input.form-control::-webkit-input-placeholder {
      color: #555555; }
    .navbar .dropdown-menu, .navbar.navbar-default .dropdown-menu {
      border-radius: 3px !important; }
      .navbar .dropdown-menu li > a:hover, .navbar .dropdown-menu li > a:focus, .navbar.navbar-default .dropdown-menu li > a:hover, .navbar.navbar-default .dropdown-menu li > a:focus {
        color: #FFFFFF;
        background-color: #FFFFFF;
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 255, 255, 0.4); }
      .navbar .dropdown-menu .active > a, .navbar.navbar-default .dropdown-menu .active > a {
        background-color: #FFFFFF;
        color: #555555;
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 255, 255, 0.4); }
        .navbar .dropdown-menu .active > a:hover, .navbar .dropdown-menu .active > a:focus, .navbar.navbar-default .dropdown-menu .active > a:hover, .navbar.navbar-default .dropdown-menu .active > a:focus {
          color: #555555; }
  .navbar.navbar-inverse {
    background-color: #212121;
    color: #fff; }
    .navbar.navbar-inverse .navbar-form .form-group input.form-control::-moz-placeholder,
    .navbar.navbar-inverse .navbar-form input.form-control::-moz-placeholder {
      color: #fff; }
    .navbar.navbar-inverse .navbar-form .form-group input.form-control:-ms-input-placeholder,
    .navbar.navbar-inverse .navbar-form input.form-control:-ms-input-placeholder {
      color: #fff; }
    .navbar.navbar-inverse .navbar-form .form-group input.form-control::-webkit-input-placeholder,
    .navbar.navbar-inverse .navbar-form input.form-control::-webkit-input-placeholder {
      color: #fff; }
    .navbar.navbar-inverse .dropdown-menu {
      border-radius: 3px !important; }
      .navbar.navbar-inverse .dropdown-menu li > a:hover, .navbar.navbar-inverse .dropdown-menu li > a:focus {
        color: #FFFFFF;
        background-color: #212121;
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(33, 33, 33, 0.4); }
      .navbar.navbar-inverse .dropdown-menu .active > a {
        background-color: #212121;
        color: #fff;
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(33, 33, 33, 0.4); }
        .navbar.navbar-inverse .dropdown-menu .active > a:hover, .navbar.navbar-inverse .dropdown-menu .active > a:focus {
          color: #fff; }
  .navbar.navbar-primary {
    background-color: #9c27b0;
    color: #ffffff; }
    .navbar.navbar-primary .navbar-form .form-group input.form-control::-moz-placeholder,
    .navbar.navbar-primary .navbar-form input.form-control::-moz-placeholder {
      color: #ffffff; }
    .navbar.navbar-primary .navbar-form .form-group input.form-control:-ms-input-placeholder,
    .navbar.navbar-primary .navbar-form input.form-control:-ms-input-placeholder {
      color: #ffffff; }
    .navbar.navbar-primary .navbar-form .form-group input.form-control::-webkit-input-placeholder,
    .navbar.navbar-primary .navbar-form input.form-control::-webkit-input-placeholder {
      color: #ffffff; }
    .navbar.navbar-primary .dropdown-menu {
      border-radius: 3px !important; }
      .navbar.navbar-primary .dropdown-menu li > a:hover, .navbar.navbar-primary .dropdown-menu li > a:focus {
        color: #FFFFFF;
        background-color: #9c27b0;
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(156, 39, 176, 0.4); }
      .navbar.navbar-primary .dropdown-menu .active > a {
        background-color: #9c27b0;
        color: #ffffff;
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(156, 39, 176, 0.4); }
        .navbar.navbar-primary .dropdown-menu .active > a:hover, .navbar.navbar-primary .dropdown-menu .active > a:focus {
          color: #ffffff; }
  .navbar.navbar-success {
    background-color: #4caf50;
    color: #ffffff; }
    .navbar.navbar-success .navbar-form .form-group input.form-control::-moz-placeholder,
    .navbar.navbar-success .navbar-form input.form-control::-moz-placeholder {
      color: #ffffff; }
    .navbar.navbar-success .navbar-form .form-group input.form-control:-ms-input-placeholder,
    .navbar.navbar-success .navbar-form input.form-control:-ms-input-placeholder {
      color: #ffffff; }
    .navbar.navbar-success .navbar-form .form-group input.form-control::-webkit-input-placeholder,
    .navbar.navbar-success .navbar-form input.form-control::-webkit-input-placeholder {
      color: #ffffff; }
    .navbar.navbar-success .dropdown-menu {
      border-radius: 3px !important; }
      .navbar.navbar-success .dropdown-menu li > a:hover, .navbar.navbar-success .dropdown-menu li > a:focus {
        color: #FFFFFF;
        background-color: #4caf50;
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(76, 175, 80, 0.4); }
      .navbar.navbar-success .dropdown-menu .active > a {
        background-color: #4caf50;
        color: #ffffff;
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(76, 175, 80, 0.4); }
        .navbar.navbar-success .dropdown-menu .active > a:hover, .navbar.navbar-success .dropdown-menu .active > a:focus {
          color: #ffffff; }
  .navbar.navbar-info {
    background-color: #00bcd4;
    color: #ffffff; }
    .navbar.navbar-info .navbar-form .form-group input.form-control::-moz-placeholder,
    .navbar.navbar-info .navbar-form input.form-control::-moz-placeholder {
      color: #ffffff; }
    .navbar.navbar-info .navbar-form .form-group input.form-control:-ms-input-placeholder,
    .navbar.navbar-info .navbar-form input.form-control:-ms-input-placeholder {
      color: #ffffff; }
    .navbar.navbar-info .navbar-form .form-group input.form-control::-webkit-input-placeholder,
    .navbar.navbar-info .navbar-form input.form-control::-webkit-input-placeholder {
      color: #ffffff; }
    .navbar.navbar-info .dropdown-menu {
      border-radius: 3px !important; }
      .navbar.navbar-info .dropdown-menu li > a:hover, .navbar.navbar-info .dropdown-menu li > a:focus {
        color: #FFFFFF;
        background-color: #00bcd4;
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(0, 188, 212, 0.4); }
      .navbar.navbar-info .dropdown-menu .active > a {
        background-color: #00bcd4;
        color: #ffffff;
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(0, 188, 212, 0.4); }
        .navbar.navbar-info .dropdown-menu .active > a:hover, .navbar.navbar-info .dropdown-menu .active > a:focus {
          color: #ffffff; }
  .navbar.navbar-warning {
    background-color: #ff9800;
    color: #ffffff; }
    .navbar.navbar-warning .navbar-form .form-group input.form-control::-moz-placeholder,
    .navbar.navbar-warning .navbar-form input.form-control::-moz-placeholder {
      color: #ffffff; }
    .navbar.navbar-warning .navbar-form .form-group input.form-control:-ms-input-placeholder,
    .navbar.navbar-warning .navbar-form input.form-control:-ms-input-placeholder {
      color: #ffffff; }
    .navbar.navbar-warning .navbar-form .form-group input.form-control::-webkit-input-placeholder,
    .navbar.navbar-warning .navbar-form input.form-control::-webkit-input-placeholder {
      color: #ffffff; }
    .navbar.navbar-warning .dropdown-menu {
      border-radius: 3px !important; }
      .navbar.navbar-warning .dropdown-menu li > a:hover, .navbar.navbar-warning .dropdown-menu li > a:focus {
        color: #FFFFFF;
        background-color: #ff9800;
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 152, 0, 0.4); }
      .navbar.navbar-warning .dropdown-menu .active > a {
        background-color: #ff9800;
        color: #ffffff;
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 152, 0, 0.4); }
        .navbar.navbar-warning .dropdown-menu .active > a:hover, .navbar.navbar-warning .dropdown-menu .active > a:focus {
          color: #ffffff; }
  .navbar.navbar-danger {
    background-color: #f44336;
    color: #ffffff; }
    .navbar.navbar-danger .navbar-form .form-group input.form-control::-moz-placeholder,
    .navbar.navbar-danger .navbar-form input.form-control::-moz-placeholder {
      color: #ffffff; }
    .navbar.navbar-danger .navbar-form .form-group input.form-control:-ms-input-placeholder,
    .navbar.navbar-danger .navbar-form input.form-control:-ms-input-placeholder {
      color: #ffffff; }
    .navbar.navbar-danger .navbar-form .form-group input.form-control::-webkit-input-placeholder,
    .navbar.navbar-danger .navbar-form input.form-control::-webkit-input-placeholder {
      color: #ffffff; }
    .navbar.navbar-danger .dropdown-menu {
      border-radius: 3px !important; }
      .navbar.navbar-danger .dropdown-menu li > a:hover, .navbar.navbar-danger .dropdown-menu li > a:focus {
        color: #FFFFFF;
        background-color: #f44336;
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(244, 67, 54, 0.4); }
      .navbar.navbar-danger .dropdown-menu .active > a {
        background-color: #f44336;
        color: #ffffff;
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(244, 67, 54, 0.4); }
        .navbar.navbar-danger .dropdown-menu .active > a:hover, .navbar.navbar-danger .dropdown-menu .active > a:focus {
          color: #ffffff; }
  .navbar.navbar-rose {
    background-color: #e91e63;
    color: #ffffff; }
    .navbar.navbar-rose .navbar-form .form-group input.form-control::-moz-placeholder,
    .navbar.navbar-rose .navbar-form input.form-control::-moz-placeholder {
      color: #ffffff; }
    .navbar.navbar-rose .navbar-form .form-group input.form-control:-ms-input-placeholder,
    .navbar.navbar-rose .navbar-form input.form-control:-ms-input-placeholder {
      color: #ffffff; }
    .navbar.navbar-rose .navbar-form .form-group input.form-control::-webkit-input-placeholder,
    .navbar.navbar-rose .navbar-form input.form-control::-webkit-input-placeholder {
      color: #ffffff; }
    .navbar.navbar-rose .dropdown-menu {
      border-radius: 3px !important; }
      .navbar.navbar-rose .dropdown-menu li > a:hover, .navbar.navbar-rose .dropdown-menu li > a:focus {
        color: #FFFFFF;
        background-color: #e91e63;
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(233, 30, 99, 0.4); }
      .navbar.navbar-rose .dropdown-menu .active > a {
        background-color: #e91e63;
        color: #ffffff;
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(233, 30, 99, 0.4); }
        .navbar.navbar-rose .dropdown-menu .active > a:hover, .navbar.navbar-rose .dropdown-menu .active > a:focus {
          color: #ffffff; }
  .navbar-inverse {
    background-color: #3f51b5; }
  .navbar.navbar-transparent {
    background-color: transparent;
    box-shadow: none;
    border-bottom: 0; }
    .navbar.navbar-transparent .logo-container .brand {
      color: #FFFFFF; }
  .navbar-fixed-top {
    border-radius: 0; }
  @media (max-width: 1199px) {
    .navbar {
      /*
    .navbar-form {
      margin-top: 10px;
    }
*/ }
      .navbar .navbar-brand {
        height: 50px;
        padding: 10px 15px; }
      .navbar .navbar-nav > li > a {
        padding-top: 15px;
        padding-bottom: 15px; } }
  .navbar .alert {
    border-radius: 0;
    left: 0;
    position: absolute;
    right: 0;
    top: 85px;
    width: 100%;
    z-index: 3;
    transition: all 0.3s; }

.nav-center {
  text-align: center; }
  .nav-center .nav-pills-icons {
    display: inline-block; }

.nav-align-center {
  text-align: center; }
  .nav-align-center .nav-pills {
    display: inline-block; }

.navbar-absolute {
  position: absolute;
  width: 100%;
  padding-top: 10px;
  z-index: 1029; }

.nav-container {
  position: relative; }

.navbar-dashboard-fixed {
  position: fixed;
  right: 0;
  left: 0;
  z-index: 1030; }

.popover, .tooltip-inner {
  color: #555555;
  line-height: 1.5em;
  background: #FFFFFF;
  border: none;
  border-radius: 3px;
  box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2); }

.popover {
  padding: 0;
  box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2); }
  .popover.left > .arrow, .popover.right > .arrow, .popover.top > .arrow, .popover.bottom > .arrow {
    border: none; }

.popover-title {
  background-color: #FFFFFF;
  border: none;
  padding: 15px 15px 5px;
  font-size: 1.3em; }

.popover-content {
  padding: 10px 15px 15px;
  line-height: 1.4; }

.tooltip.in {
  opacity: 1;
  -webkit-transform: translate3d(0, 0px, 0);
  transform: translate3d(0, 0px, 0); }

.tooltip {
  opacity: 0;
  transition: opacity, -webkit-transform .2s ease;
  transition: opacity, transform .2s ease;
  transition: opacity, transform .2s ease, -webkit-transform .2s ease;
  -webkit-transform: translate3d(0, 5px, 0);
  transform: translate3d(0, 5px, 0); }
  .tooltip.left .tooltip-arrow {
    border-left-color: #FFFFFF; }
  .tooltip.right .tooltip-arrow {
    border-right-color: #FFFFFF; }
  .tooltip.top .tooltip-arrow {
    border-top-color: #FFFFFF; }
  .tooltip.bottom .tooltip-arrow {
    border-bottom-color: #FFFFFF; }

.tooltip-inner {
  padding: 10px 15px;
  min-width: 130px; }

footer {
  padding: 15px 0; }
  footer ul {
    margin-bottom: 0;
    padding: 0;
    list-style: none; }
    footer ul li {
      display: inline-block; }
      footer ul li a {
        color: inherit;
        padding: 15px;
        font-weight: 500;
        font-size: 12px;
        text-transform: uppercase;
        border-radius: 3px;
        text-decoration: none;
        position: relative;
        display: block; }
        footer ul li a:hover {
          text-decoration: none; }
  footer .copyright {
    padding: 15px;
    margin: 0; }
    footer .copyright .material-icons {
      font-size: 18px;
      position: relative;
      top: 3px; }
  footer .btn {
    margin-top: 0;
    margin-bottom: 0; }

.dropdown-menu {
  border: 0;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26); }
  .dropdown-menu .divider {
    background-color: rgba(0, 0, 0, 0.12); }
  .dropdown-menu li > a {
    font-size: 13px;
    padding: 10px 20px;
    margin: 0 5px;
    border-radius: 2px;
    transition: all 150ms linear; }
    .dropdown-menu li > a:hover, .dropdown-menu li > a:focus {
      box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2); }
  .dropdown-menu.dropdown-with-icons li > a {
    padding: 12px 20px 12px 12px; }
    .dropdown-menu.dropdown-with-icons li > a .material-icons {
      vertical-align: middle;
      font-size: 24px;
      position: relative;
      margin-top: -4px;
      top: 1px;
      margin-right: 12px;
      opacity: .5; }
  .dropdown-menu li {
    position: relative; }
    .dropdown-menu li a:hover,
    .dropdown-menu li a:focus,
    .dropdown-menu li a:active {
      background-color: #9c27b0;
      color: #FFFFFF; }
  .dropdown-menu .divider {
    margin: 5px 0; }
  .navbar .dropdown-menu li a:hover,
  .navbar .dropdown-menu li a:focus,
  .navbar .dropdown-menu li a:active,
  .navbar.navbar-default .dropdown-menu li a:hover,
  .navbar.navbar-default .dropdown-menu li a:focus,
  .navbar.navbar-default .dropdown-menu li a:active,
  .bootstrap-table .dropdown-menu li a:hover,
  .bootstrap-table .dropdown-menu li a:focus,
  .bootstrap-table .dropdown-menu li a:active {
    background-color: #9c27b0;
    color: #FFFFFF;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(156, 39, 176, 0.4); }

.btn-group.bootstrap-select .dropdown-menu,
.dropdown .dropdown-menu,
.timeline .dropdown .dropdown-menu,
.dropdown-menu.bootstrap-datetimepicker-widget,
.bootstrap-table .dropdown-menu {
  transition: all 150ms linear;
  -webkit-transform: translate3d(0, -20px, 0);
  transform: translate3d(0, -20px, 0);
  visibility: hidden;
  display: block;
  opacity: 0;
  filter: alpha(opacity=0); }

.btn-group.bootstrap-select.open .dropdown-menu,
.dropdown.open .dropdown-menu,
.dropdown-menu.bootstrap-datetimepicker-widget.open,
.bootstrap-table .open .dropdown-menu,
.timeline .dropdown.open .dropdown-menu {
  opacity: 1;
  filter: alpha(opacity=100);
  visibility: visible;
  -webkit-transform: translate3d(0, 1px, 0);
  transform: translate3d(0, 1px, 0); }

.dropup .dropdown-menu {
  transition: all 150ms linear;
  -webkit-transform: translate3d(0, 20px, 0);
  transform: translate3d(0, 20px, 0);
  visibility: hidden;
  display: block;
  opacity: 0;
  filter: alpha(opacity=0); }

.dropup.open .dropdown-menu {
  -webkit-transform: translate3d(0, -2px, 0);
  transform: translate3d(0, -2px, 0);
  visibility: visible;
  opacity: 1;
  filter: alpha(opacity=100); }

.card {
  display: inline-block;
  position: relative;
  width: 100%;
  margin: 25px 0;
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
  border-radius: 6px;
  color: rgba(0,0,0, 0.87);
  background: #fff; }
  .card .card-height-indicator {
    margin-top: 100%; }
  .card.row-space .header {
    padding: 15px 20px 0; }
  .card .map {
    height: 280px;
    border-radius: 6px;
    margin-top: 15px; }
    .card .map.map-big {
      height: 420px; }
  .card .card-title {
    margin-top: 0;
    margin-bottom: 3px; }
    .card .card-title:not(.card-calendar .card-title) {
      margin-top: 0;
      margin-bottom: 5px; }
  .card .card-image {
    height: 60%;
    position: relative;
    overflow: hidden;
    margin-left: 15px;
    margin-right: 15px;
    margin-top: -30px;
    border-radius: 6px;
    z-index: 3;
    box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2); }
    .card .card-image img {
      width: 100%;
      height: 100%;
      border-radius: 6px;
      pointer-events: none; }
    .card .card-image .card-title {
      position: absolute;
      bottom: 15px;
      left: 15px;
      color: #fff;
      font-size: 1.3em;
      text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5); }
  .card .category:not([class*="text-"]) {
    color: #999999;
    font-size: 14px; }
  .card .card-content {
    padding: 15px 20px;
    position: relative; }
    .card .card-content .category {
      margin-bottom: 0; }
  .card .card-actions {
    position: absolute;
    z-index: 1;
    top: -50px;
    width: calc(100% - 30px);
    left: 17px;
    right: 17px;
    text-align: center; }
    .card .card-actions .btn {
      padding-left: 12px;
      padding-right: 12px; }
    .card .card-actions .fix-broken-card {
      position: absolute;
      top: -65px; }
  .card .card-header {
    padding: 15px 20px 0;
    z-index: 3; }
    .card .card-header .category {
      margin-bottom: 0; }
    .card .card-header.card-header-text {
      display: inline-block; }
      .card .card-header.card-header-text:after {
        content: "";
        display: table; }
    .card .card-header.card-header-icon {
      float: left; }
      .card .card-header.card-header-icon i {
        width: 33px;
        height: 33px;
        text-align: center;
        line-height: 33px; }
    .card .card-header.card-header-tabs .nav-tabs {
      background: transparent;
      padding: 0; }
    .card .card-header.card-header-tabs .nav-tabs-title {
      float: left;
      padding: 10px 10px 10px 0;
      line-height: 24px; }
    .card .card-header.card-header-icon + .card-content .card-title {
      padding-bottom: 15px; }
  .card .social-line {
    margin-top: 15px;
    text-align: center;
    padding: 0; }
    .card .social-line .btn {
      color: #FFFFFF;
      margin-left: 5px;
      margin-right: 5px; }
  .card [data-background-color] {
    box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
    margin: -20px 15px 0;
    border-radius: 3px;
    padding: 15px;
    background-color: #999999;
    position: relative; }
    .card [data-background-color] .card-title {
      color: #FFFFFF; }
    .card [data-background-color] .category {
      margin-bottom: 0;
      color: rgba(255, 255, 255, 0.62); }
    .card [data-background-color] .ct-label {
      color: rgba(255, 255, 255, 0.7); }
    .card [data-background-color] .ct-grid {
      stroke: rgba(255, 255, 255, 0.2); }
    .card [data-background-color] .ct-series-a .ct-point,
    .card [data-background-color] .ct-series-a .ct-line,
    .card [data-background-color] .ct-series-a .ct-bar,
    .card [data-background-color] .ct-series-a .ct-slice-donut {
      stroke: rgba(255, 255, 255, 0.8); }
    .card [data-background-color] .ct-series-a .ct-slice-pie,
    .card [data-background-color] .ct-series-a .ct-area {
      fill: rgba(255, 255, 255, 0.4); }
  .card .chart-title {
    position: absolute;
    top: 25px;
    width: 100%;
    text-align: center; }
    .card .chart-title h3 {
      margin: 0;
      color: #FFFFFF; }
    .card .chart-title h6 {
      margin: 0;
      color: rgba(255, 255, 255, 0.4); }
  .card .ct-chart ~ .card-footer i:nth-child(1n+2) {
    width: 18px;
    text-align: center; }
  .card .card-footer {
    margin: 0 20px 10px;
    padding-top: 10px;
    border-top: 1px solid #eeeeee; }
    .card .card-footer .form-group {
      margin: 5px 0 0; }
    .card .card-footer .content {
      display: block; }
    .card .card-footer div {
      display: inline-block; }
    .card .card-footer .author {
      color: #999999; }
    .card .card-footer .stats {
      line-height: 22px;
      color: #999999;
      font-size: 12px; }
      .card .card-footer .stats .material-icons {
        position: relative;
        top: 4px;
        font-size: 16px; }
      .card .card-footer .stats .category {
        padding-top: 7px;
        padding-bottom: 7px;
        margin-bottom: 0; }
    .card .card-footer h4 {
      margin: 5px 0; }
    .card .card-footer .btn {
      margin-top: 5px;
      margin-bottom: 5px; }
    .card .card-footer h6 {
      color: #999999; }
  .card form .card-footer {
    border: none; }
  .card img {
    width: 100%;
    height: auto; }
  .card .category .material-icons {
    position: relative;
    top: 6px;
    line-height: 0; }
  .card .category-social .fa {
    font-size: 24px;
    position: relative;
    margin-top: -4px;
    top: 2px;
    margin-right: 5px; }
  .card .author .avatar {
    width: 30px;
    height: 30px;
    overflow: hidden;
    border-radius: 50%;
    margin-right: 5px; }
  .card .author a {
    color: #3C4858;
    text-decoration: none; }
    .card .author a .ripple-container {
      display: none; }
  .card .table {
    margin-bottom: 0; }
    .card .table tr:first-child td {
      border-top: none; }
  .card .nav-pills,
  .card .tab-content {
    margin-top: 20px; }
  .card [data-background-color="purple"] {
    background: linear-gradient(60deg, #ab47bc, #8e24aa);
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(156, 39, 176, 0.4); }
  .card [data-icon-bg-color="purple"] i {
    color: #9c27b0; }
  .card [data-background-color="blue"] {
    background: linear-gradient(60deg, #26c6da, #00acc1);
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(0, 188, 212, 0.4); }
  .card [data-icon-bg-color="blue"] i {
    color: #00bcd4; }
  .card [data-background-color="green"] {
    background: linear-gradient(60deg, #66bb6a, #43a047);
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(76, 175, 80, 0.4); }
  .card [data-icon-bg-color="green"] i {
    color: #4caf50; }
  .card [data-background-color="orange"] {
    background: linear-gradient(60deg, #ffa726, #fb8c00);
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 152, 0, 0.4); }
  .card [data-icon-bg-color="orange"] i {
    color: #ff9800; }
  .card [data-background-color="red"] {
    background: linear-gradient(60deg, #ef5350, #e53935);
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(244, 67, 54, 0.4); }
  .card [data-icon-bg-color="red"] i {
    color: #f44336; }
  .card [data-background-color="rose"] {
    background: linear-gradient(60deg, #ec407a, #d81b60);
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(233, 30, 99, 0.4); }
  .card [data-icon-bg-color="rose"] i {
    color: #e91e63; }
  .card [data-header-animation="true"] {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    transition: all 300ms cubic-bezier(0.34, 1.61, 0.7, 1); }
  .card:hover [data-header-animation="true"] {
    -webkit-transform: translate3d(0, -50px, 0);
    transform: translate3d(0, -50px, 0); }
  .card [data-background-color] {
    color: #FFFFFF; }
    .card [data-background-color] a {
      color: #FFFFFF; }

.card-chart .card-header {
  padding: 0;
  min-height: 160px; }
  .card-chart .card-header + .content h4 {
    margin-top: 0; }

.card-calendar .card-content {
  padding: 0; }

.card-stats .card-title {
  margin: 0; }

.card-stats .card-header {
  float: left;
  text-align: center; }
  .card-stats .card-header i {
    font-size: 36px;
    line-height: 56px;
    width: 56px;
    height: 56px; }

.card-stats .card-content {
  text-align: right;
  padding-top: 10px; }

.card-plain {
  background: transparent;
  box-shadow: none; }
  .card-plain .card-header {
    margin-left: 0;
    margin-right: 0; }
  .card-plain .card-header-icon {
    margin-right: 15px; }
  .card-plain .content {
    padding-left: 5px;
    padding-right: 5px; }
  .card-plain .card-image {
    margin: 0;
    border-radius: 3px; }
    .card-plain .card-image img {
      border-radius: 3px; }

.card-raised {
  box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2); }

.iframe-container {
  margin: 0 -20px 0; }
  .iframe-container iframe {
    width: 100%;
    height: 500px;
    border: 0;
    box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2); }

.card-profile,
.card-testimonial {
  margin-top: 30px;
  text-align: center; }
  .card-profile .btn-just-icon.btn-raised,
  .card-testimonial .btn-just-icon.btn-raised {
    margin-left: 6px;
    margin-right: 6px; }
  .card-profile .card-avatar,
  .card-testimonial .card-avatar {
    max-width: 130px;
    max-height: 130px;
    margin: -50px auto 0;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2); }
    .card-profile .card-avatar + .card-content,
    .card-testimonial .card-avatar + .card-content {
      margin-top: 15px; }
  .card-profile.card-plain .card-avatar,
  .card-testimonial.card-plain .card-avatar {
    margin-top: 0; }

.card-testimonial {
  margin-bottom: 65px; }
  .card-testimonial .card-avatar {
    max-width: 100px;
    max-height: 100px; }
  .card-testimonial .footer {
    margin-top: 0; }
    .card-testimonial .footer .card-avatar {
      margin-top: 10px;
      margin-bottom: -50px; }
  .card-testimonial .card-description {
    font-style: italic; }
    .card-testimonial .card-description + .card-title {
      margin-top: 30px; }
  .card-testimonial .icon {
    margin-top: 30px; }
    .card-testimonial .icon .material-icons {
      font-size: 40px; }

.card-pricing {
  text-align: center; }
  .card-pricing .card-title {
    margin-top: 30px; }
  .card-pricing .content {
    padding: 15px !important; }
  .card-pricing .icon {
    padding: 10px 0 0px;
    color: #999999; }
    .card-pricing .icon i {
      font-size: 55px;
      border: 1px solid #E5E5E5;
      border-radius: 50%;
      width: 130px;
      line-height: 130px;
      height: 130px; }
    .card-pricing .icon.icon-primary {
      color: #9c27b0; }
    .card-pricing .icon.icon-info {
      color: #00bcd4; }
    .card-pricing .icon.icon-success {
      color: #4caf50; }
    .card-pricing .icon.icon-warning {
      color: #ff9800; }
    .card-pricing .icon.icon-danger {
      color: #f44336; }
    .card-pricing .icon.icon-rose {
      color: #e91e63; }
  .card-pricing h1 small {
    font-size: 18px; }
    .card-pricing h1 small:first-child {
      position: relative;
      top: -17px;
      font-size: 26px; }
  .card-pricing ul {
    list-style: none;
    padding: 0;
    max-width: 240px;
    margin: 10px auto; }
    .card-pricing ul li {
      color: #999999;
      text-align: center;
      padding: 12px 0;
      border-bottom: 1px solid rgba(153, 153, 153, 0.3); }
      .card-pricing ul li:last-child {
        border: 0; }
      .card-pricing ul li b {
        color: #3C4858; }
      .card-pricing ul li i {
        top: 6px;
        position: relative; }
  .card-pricing.card-background ul li,
  .card-pricing [class*="content-"] ul li {
    color: #FFFFFF;
    border-color: rgba(255, 255, 255, 0.3); }
    .card-pricing.card-background ul li b,
    .card-pricing [class*="content-"] ul li b {
      color: #FFFFFF; }
  .card-pricing.card-background [class*="text-"],
  .card-pricing [class*="content-"] [class*="text-"] {
    color: #FFFFFF; }
  .card-pricing.card-background:after {
    background-color: rgba(0, 0, 0, 0.7); }

.card-background {
  background-position: center center;
  background-size: cover;
  text-align: center; }
  .card-background .content {
    position: relative;
    z-index: 2;
    min-height: 280px;
    padding-top: 40px;
    padding-bottom: 40px;
    max-width: 440px;
    margin: 0 auto; }
  .card-background .category,
  .card-background .card-description,
  .card-background small {
    color: rgba(255, 255, 255, 0.7); }
  .card-background .card-title {
    color: #FFFFFF;
    margin-top: 10px; }
  .card-background:not(.card-pricing) .btn {
    margin-bottom: 0; }
  .card-background:after {
    position: absolute;
    z-index: 1;
    width: 100%;
    height: 100%;
    display: block;
    left: 0;
    top: 0;
    content: "";
    background-color: rgba(0, 0, 0, 0.56);
    border-radius: 6px; }

.card-product {
  margin-top: 30px; }
  .card-product .btn-simple.btn-just-icon {
    padding: 0; }
  .card-product .footer {
    margin-top: 5px; }
    .card-product .footer .stats .material-icons {
      margin-top: 4px;
      top: 0; }
    .card-product .footer .price h4 {
      margin-bottom: 0; }
  .card-product .card-title,
  .card-product .category,
  .card-product .card-description {
    text-align: center; }
  .card-product .card-image {
    min-height: 160px;
    background-size: cover;
    background-image: url(image_placeholder.ebe9884b2152a08a525f.jpg);
    background-position: center center; }

.card-login .card-title {
  margin-top: 10px;
  margin-bottom: 10px;
  font-weight: 700; }

.card-login .text-divider {
  margin-top: 30px;
  margin-bottom: 0px;
  text-align: center; }

.card-login .card-content {
  padding: 0px 30px 0px 10px; }

.card-login .checkbox {
  margin-top: 20px; }
  .card-login .checkbox label {
    margin-left: 17px; }
  .card-login .checkbox .checkbox-material {
    padding-right: 12px; }

.card-login .social-line {
  margin-top: 15px;
  text-align: center;
  padding: 0; }
  .card-login .social-line .btn {
    color: #FFFFFF;
    margin-left: 5px;
    margin-right: 5px; }

.nav-tabs {
  background: #9c27b0;
  border: 0;
  border-radius: 3px;
  padding: 0 15px; }
  .nav-tabs > li > a {
    color: #FFFFFF;
    border: 0;
    margin: 0;
    border-radius: 3px;
    line-height: 24px;
    text-transform: uppercase;
    font-size: 12px; }
    .nav-tabs > li > a:hover {
      background-color: transparent;
      border: 0; }
  .nav-tabs > li > a,
  .nav-tabs > li > a:hover,
  .nav-tabs > li > a:focus {
    background-color: transparent;
    border: 0 !important;
    color: #FFFFFF !important;
    font-weight: 500; }
  .nav-tabs > li.disabled > a,
  .nav-tabs > li.disabled > a:hover {
    color: rgba(255, 255, 255, 0.5); }
  .nav-tabs > li .material-icons {
    margin: -1px 5px 0 0; }
  .nav-tabs > li.active > a,
  .nav-tabs > li.active > a:hover,
  .nav-tabs > li.active > a:focus {
    background-color: rgba(255, 255, 255, 0.2);
    transition: background-color .1s .2s; }

@media (min-width: 992px) {
  .navbar-form {
    margin-top: 21px;
    margin-bottom: 21px;
    padding-left: 5px;
    padding-right: 5px; }
  .navbar-nav.navbar-right > li > .dropdown-menu:before {
    left: auto;
    right: 12px; }
  .navbar-nav.navbar-right > li > .dropdown-menu:after {
    left: auto;
    right: 12px; }
  .footer:not(.footer-big) nav > ul li:first-child {
    margin-left: 0; }
  .card form [class*="col-"]:first-child {
    padding-left: 15px; }
  .card form [class*="col-"]:last-child {
    padding-right: 15px; }
  .sidebar .navbar-form {
    display: none !important; }
  .sidebar .nav-mobile-menu {
    display: none; }
  .close-layer {
    display: none; }
  .wrapper .navbar-dashboard-fixed {
    width: calc(100% - 260px);
    right: 0;
    left: auto; }
  .sidebar-mini .wrapper .navbar-dashboard-fixed {
    width: calc(100% - 80px); } }

/*          Changes for small display      */
@media (max-width: 991px) {
  .form-group textarea {
    padding-top: 15px; }
  .menu-on-left.nav-open .main-panel,
  .menu-on-left.nav-open .wrapper-full-page,
  .menu-on-left.nav-open .wrapper .main-panel,
  .menu-on-left.nav-open .navbar-fixed > div {
    -webkit-transform: translate3d(260px, 0, 0);
    transform: translate3d(260px, 0, 0); }
  .menu-on-left.nav-open .sidebar,
  .menu-on-left.nav-open .off-canvas-sidebar {
    -webkit-transform: translate3d(0px, 0, 0);
    transform: translate3d(0px, 0, 0); }
  .menu-on-left.nav-open #bodyClick {
    right: 0;
    left: auto;
    width: calc(100% - 260px); }
  .menu-on-left .sidebar,
  .menu-on-left .off-canvas-sidebar {
    left: 0;
    right: auto;
    -webkit-transform: translate3d(-260px, 0, 0);
    transform: translate3d(-260px, 0, 0); }
  .timeline:before {
    left: 5%; }
  .timeline > li > .timeline-badge {
    left: 5%; }
  .timeline > li > .timeline-panel {
    float: right;
    width: 86%; }
    .timeline > li > .timeline-panel:before {
      border-left-width: 0;
      border-right-width: 15px;
      left: -15px;
      right: auto; }
    .timeline > li > .timeline-panel:after {
      border-left-width: 0;
      border-right-width: 14px;
      left: -14px;
      right: auto; }
  .nav-mobile-menu .dropdown .dropdown-menu {
    display: none; }
  .nav-mobile-menu .dropdown.open .dropdown-menu {
    display: block; }
  .nav-mobile-menu li.active > a {
    background-color: rgba(255, 255, 255, 0.1); }
  .navbar-minimize {
    display: none; }
  .card .form-horizontal .label-on-left,
  .card .form-horizontal .label-on-right {
    padding-left: 15px;
    padding-top: 8px; }
  .card .form-horizontal .form-group {
    margin-top: 0px; }
  .card .form-horizontal .checkbox-radios {
    padding-bottom: 15px; }
    .card .form-horizontal .checkbox-radios .checkbox:first-child,
    .card .form-horizontal .checkbox-radios .radio:first-child {
      margin-top: 0; }
  .card .form-horizontal .checkbox-inline {
    margin-top: 0; }
  .sidebar {
    display: none;
    box-shadow: none; }
    .sidebar .sidebar-wrapper {
      padding-bottom: 60px; }
    .sidebar .nav-mobile-menu {
      margin-top: 0; }
      .sidebar .nav-mobile-menu .notification {
        float: left;
        line-height: 30px;
        margin-right: 8px; }
      .sidebar .nav-mobile-menu .open .dropdown-menu {
        position: static;
        float: none;
        width: auto;
        margin-top: 0;
        background-color: transparent;
        border: 0;
        box-shadow: none; }
  .main-panel {
    width: 100%; }
  .wrapper-full-page .navbar.navbar-transparent {
    padding-top: 15px;
    background-color: rgba(0, 0, 0, 0.45); }
  body {
    position: relative;
    min-height: 100vh; }
  .wrapper .main-panel,
  .sidebar-pages .main-panel,
  .off-canvas-menu .wrapper-full-page,
  .sidebar-pages .navbar .container {
    transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    left: 0; }
  .navbar .container {
    transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1); }
  .sidebar-pages .navbar .navbar-collapse.collapse,
  .sidebar-pages .navbar .navbar-collapse.collapse.in,
  .sidebar-pages .navbar .navbar-collapse.collapsing {
    display: none !important; }
  .sidebar,
  .off-canvas-menu .navbar-collapse {
    position: fixed;
    display: block;
    top: 0;
    height: 100% !important;
    max-height: none;
    width: 260px;
    right: 0;
    left: auto;
    z-index: 1032;
    visibility: visible;
    background-color: #9A9A9A;
    overflow-y: visible;
    border-top: none;
    text-align: left;
    padding-right: 0px;
    padding-left: 0px;
    -webkit-transform: translate3d(260px, 0, 0);
    transform: translate3d(260px, 0, 0);
    transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1); }
    .sidebar > ul,
    .off-canvas-menu .navbar-collapse > ul {
      position: relative;
      z-index: 4;
      overflow-y: scroll;
      height: calc(100vh - 61px);
      width: 100%; }
    .sidebar::before,
    .off-canvas-menu .navbar-collapse::before {
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      position: absolute;
      background-color: #282828;
      display: block;
      content: "";
      z-index: 1; }
    .sidebar .logo,
    .off-canvas-menu .navbar-collapse .logo {
      position: relative;
      z-index: 4; }
    .sidebar .navbar-form,
    .off-canvas-menu .navbar-collapse .navbar-form {
      margin: 10px 0px;
      float: none !important;
      padding-top: 1px;
      padding-bottom: 1px;
      position: relative; }
    .sidebar .table-responsive,
    .off-canvas-menu .navbar-collapse .table-responsive {
      width: 100%;
      margin-bottom: 15px;
      overflow-x: scroll;
      overflow-y: hidden;
      -ms-overflow-style: -ms-autohiding-scrollbar;
      -webkit-overflow-scrolling: touch; }
  .navbar-collapse .navbar-nav {
    float: none !important; }
  .bootstrap-collapse .navbar-collapse {
    box-shadow: none; }
  .bootstrap-collapse .container {
    padding-right: 0;
    padding-left: 0; }
  .form-group.form-search .form-control {
    font-size: 1.7em;
    height: 37px;
    width: 78%; }
  .navbar-form .btn {
    position: absolute;
    top: 12px;
    right: 15px; }
  .nav-open .sidebar-pages .main-panel,
  .nav-open .sidebar-pages .navbar .container,
  .nav-open .wrapper .main-panel {
    left: 0;
    -webkit-transform: translate3d(-260px, 0, 0);
    transform: translate3d(-260px, 0, 0); }
  .nav-open .sidebar {
    box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2); }
  .nav-open .off-canvas-sidebar,
  .nav-open .sidebar {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); }
  .close-layer {
    height: 100%;
    width: 100%;
    position: absolute;
    opacity: 0;
    top: 0;
    left: auto;
    background: rgba(0, 0, 0, 0.35);
    content: "";
    z-index: 9999;
    overflow-x: hidden;
    transition: all 370ms ease-in; }
    .close-layer.visible {
      opacity: 1; }
  .navbar-toggle .icon-bar {
    display: block;
    position: relative;
    background: #fff;
    width: 24px;
    height: 2px;
    border-radius: 1px;
    margin: 0 auto; }
  .navbar-header .navbar-toggle {
    padding: 15px;
    margin-top: 4px;
    width: 40px;
    height: 40px;
    display: block !important;
    float: right; }
  .bar1,
  .bar2,
  .bar3 {
    outline: 1px solid transparent; }
  @keyframes topbar-x {
    0% {
      top: 0px;
      -webkit-transform: rotate(0deg);
              transform: rotate(0deg); }
    45% {
      top: 6px;
      -webkit-transform: rotate(145deg);
              transform: rotate(145deg); }
    75% {
      -webkit-transform: rotate(130deg);
              transform: rotate(130deg); }
    100% {
      -webkit-transform: rotate(135deg);
              transform: rotate(135deg); } }
  @-webkit-keyframes topbar-x {
    0% {
      top: 0px;
      -webkit-transform: rotate(0deg); }
    45% {
      top: 6px;
      -webkit-transform: rotate(145deg); }
    75% {
      -webkit-transform: rotate(130deg); }
    100% {
      -webkit-transform: rotate(135deg); } }
  @keyframes topbar-back {
    0% {
      top: 6px;
      -webkit-transform: rotate(135deg);
              transform: rotate(135deg); }
    45% {
      -webkit-transform: rotate(-10deg);
              transform: rotate(-10deg); }
    75% {
      -webkit-transform: rotate(5deg);
              transform: rotate(5deg); }
    100% {
      top: 0px;
      -webkit-transform: rotate(0);
              transform: rotate(0); } }
  @-webkit-keyframes topbar-back {
    0% {
      top: 6px;
      -webkit-transform: rotate(135deg); }
    45% {
      -webkit-transform: rotate(-10deg); }
    75% {
      -webkit-transform: rotate(5deg); }
    100% {
      top: 0px;
      -webkit-transform: rotate(0); } }
  @keyframes bottombar-x {
    0% {
      bottom: 0px;
      -webkit-transform: rotate(0deg);
              transform: rotate(0deg); }
    45% {
      bottom: 6px;
      -webkit-transform: rotate(-145deg);
              transform: rotate(-145deg); }
    75% {
      -webkit-transform: rotate(-130deg);
              transform: rotate(-130deg); }
    100% {
      -webkit-transform: rotate(-135deg);
              transform: rotate(-135deg); } }
  @-webkit-keyframes bottombar-x {
    0% {
      bottom: 0px;
      -webkit-transform: rotate(0deg); }
    45% {
      bottom: 6px;
      -webkit-transform: rotate(-145deg); }
    75% {
      -webkit-transform: rotate(-130deg); }
    100% {
      -webkit-transform: rotate(-135deg); } }
  @keyframes bottombar-back {
    0% {
      bottom: 6px;
      -webkit-transform: rotate(-135deg);
              transform: rotate(-135deg); }
    45% {
      -webkit-transform: rotate(10deg);
              transform: rotate(10deg); }
    75% {
      -webkit-transform: rotate(-5deg);
              transform: rotate(-5deg); }
    100% {
      bottom: 0px;
      -webkit-transform: rotate(0);
              transform: rotate(0); } }
  @-webkit-keyframes bottombar-back {
    0% {
      bottom: 6px;
      -webkit-transform: rotate(-135deg); }
    45% {
      -webkit-transform: rotate(10deg); }
    75% {
      -webkit-transform: rotate(-5deg); }
    100% {
      bottom: 0px;
      -webkit-transform: rotate(0); } }
  .navbar-toggle .icon-bar:nth-child(2) {
    top: 0px;
    -webkit-animation: topbar-back 500ms linear 0s;
    animation: topbar-back 500ms 0s;
    -webkit-animation-fill-mode: forwards;
    animation-fill-mode: forwards; }
  .navbar-toggle .icon-bar:nth-child(3) {
    opacity: 1; }
  .navbar-toggle .icon-bar:nth-child(4) {
    bottom: 0px;
    -webkit-animation: bottombar-back 500ms linear 0s;
    animation: bottombar-back 500ms 0s;
    -webkit-animation-fill-mode: forwards;
    animation-fill-mode: forwards; }
  .navbar-toggle.toggled .icon-bar:nth-child(2) {
    top: 6px;
    -webkit-animation: topbar-x 500ms linear 0s;
    animation: topbar-x 500ms 0s;
    -webkit-animation-fill-mode: forwards;
    animation-fill-mode: forwards; }
  .navbar-toggle.toggled .icon-bar:nth-child(3) {
    opacity: 0; }
  .navbar-toggle.toggled .icon-bar:nth-child(4) {
    bottom: 6px;
    -webkit-animation: bottombar-x 500ms linear 0s;
    animation: bottombar-x 500ms 0s;
    -webkit-animation-fill-mode: forwards;
    animation-fill-mode: forwards; }
  @-webkit-keyframes fadeIn {
    0% {
      opacity: 0; }
    100% {
      opacity: 1; } }
  @keyframes fadeIn {
    0% {
      opacity: 0; }
    100% {
      opacity: 1; } }
  .dropdown-menu .divider {
    background-color: rgba(229, 229, 229, 0.15); }
  .navbar-nav {
    margin: 1px 0;
    margin-top: 15px; }
    .navbar-nav .open .dropdown-menu > li > a {
      padding: 15px 15px 5px 50px; }
    .navbar-nav .open .dropdown-menu > li:first-child > a {
      padding: 5px 15px 5px 50px; }
    .navbar-nav .open .dropdown-menu > li:last-child > a {
      padding: 15px 15px 25px 50px; }
  [class*="navbar-"] .navbar-nav.navbar-nav .open .dropdown-menu > li > a:active {
    opacity: 1; }
  [class*="navbar-"] .navbar-nav .dropdown > a:hover .caret {
    border-bottom-color: #777;
    border-top-color: #777; }
  [class*="navbar-"] .navbar-nav .dropdown > a:active .caret {
    border-bottom-color: white;
    border-top-color: white; }
  .dropdown-menu {
    display: none; }
  .navbar-fixed-top {
    -webkit-backface-visibility: hidden; }
  #bodyClick {
    height: 100%;
    width: 100%;
    position: fixed;
    opacity: 0;
    top: 0;
    left: auto;
    right: 250px;
    content: "";
    z-index: 9999;
    overflow-x: hidden; }
  .social-line .btn {
    margin: 0 0 10px 0; }
  .subscribe-line .form-control {
    margin: 0 0 10px 0; }
  .social-line.pull-right {
    float: none; }
  .footer:not(.footer-big) nav > ul li {
    float: none; }
  .social-area.pull-right {
    float: none !important; }
  .form-control + .form-control-feedback {
    margin-top: -8px; }
  .navbar-toggle:hover, .navbar-toggle:focus {
    background-color: transparent !important; }
  .media-post .author {
    width: 20%;
    float: none !important;
    display: block;
    margin: 0 auto 10px; }
  .media-post .media-body {
    width: 100%; }
  .sidebar-pages .navbar-header .collapse,
  .sidebar-pages .navbar-toggle {
    display: block !important; }
  .off-canvas-menu .navbar-header .collapse,
  .off-canvas-menu .navbar-toggle {
    display: none !important; }
  .sidebar-pages .navbar-collapse.collapse {
    height: 100% !important; }
  .navbar-collapse.collapse.in {
    display: block; }
  .navbar-header {
    float: none; }
  .off-canvas-menu .navbar-header {
    float: left; }
  .navbar-collapse .nav p {
    font-size: 14px;
    margin: 0; }
  .navbar-transparent {
    background: rgba(0, 0, 0, 0.6); } }

@media (min-width: 768px) {
  .navbar > .container-fluid .navbar-brand {
    margin-left: 0; } }

@media (max-width: 991px) {
  .main-panel .content {
    padding-left: 0;
    padding-right: 0; }
  .off-canvas-menu .nav > li > a,
  .off-canvas-menu .nav > li > a:hover {
    color: #ffffff; }
  .off-canvas-menu .nav > li > a i,
  .off-canvas-menu .nav > li > a i:hover {
    color: #a9afbb; }
  .off-canvas-menu .navbar-header {
    float: none; }
  .off-canvas-menu .navbar-header .collapse, .off-canvas-menu .navbar-toggle {
    display: block !important; }
  .off-canvas-menu.nav-open .wrapper-full-page {
    -webkit-transform: translate3d(-260px, 0, 0);
    transform: translate3d(-260px, 0, 0); }
  .off-canvas-menu .navbar-collapse {
    padding-right: 15px;
    padding-left: 15px; }
  .navbar-nav > li {
    float: none;
    position: relative;
    display: block; }
  .fileinput {
    display: block; }
  .card .card-header.card-header-text {
    display: block; }
  .navbar-form .form-group {
    margin-bottom: 0; }
  .table-responsive {
    border: none; }
  .modal-small {
    width: auto;
    margin-left: 15px;
    margin-right: 15px; } }

@media (min-width: 992px) {
  .table-full-width {
    margin-left: -20px;
    margin-right: -20px; }
  .table-responsive {
    overflow: auto; } }

@media all and (max-width: 490px) {
  .nav-center .nav-pills-icons {
    max-width: 211px; } }

@media screen and (min-width: 768px) and (max-width: 992px) {
  .bootstrap-collapse .navbar-collapse.collapse {
    display: none !important; }
    .bootstrap-collapse .navbar-collapse.collapse.in {
      display: block !important; } }

.fixed-plugin li > a,
.fixed-plugin .badge {
  transition: all .34s;
  -webkit-transition: all .34s;
  -moz-transition: all .34s; }

.fixed-plugin {
  position: fixed;
  top: 180px;
  right: 0;
  width: 64px;
  background: rgba(0, 0, 0, 0.3);
  z-index: 1031;
  border-radius: 8px 0 0 8px;
  text-align: center; }

.fixed-plugin .fa-cog {
  color: #FFFFFF;
  padding: 10px;
  border-radius: 0 0 6px 6px;
  width: auto; }

.fixed-plugin .dropdown-menu {
  right: 80px;
  left: auto;
  width: 290px;
  border-radius: 10px;
  padding: 0 10px; }

.fixed-plugin .dropdown-menu:after, .fixed-plugin .dropdown-menu:before {
  right: 10px;
  margin-left: auto;
  left: auto; }

.fixed-plugin .fa-circle-thin {
  color: #FFFFFF; }

.fixed-plugin .active .fa-circle-thin {
  color: #00bbff; }

.fixed-plugin .dropdown-menu > .active > a,
.fixed-plugin .dropdown-menu > .active > a:hover,
.fixed-plugin .dropdown-menu > .active > a:focus {
  color: #777777;
  text-align: center; }

.fixed-plugin img {
  border-radius: 0;
  width: 100%;
  height: 100px;
  margin: 0 auto; }

.fixed-plugin .dropdown-menu li > a:hover,
.fixed-plugin .dropdown-menu li > a:focus {
  box-shadow: none; }

.fixed-plugin .badge {
  border: 3px solid #FFFFFF;
  border-radius: 50%;
  cursor: pointer;
  display: inline-block;
  height: 23px;
  margin-right: 5px;
  position: relative;
  width: 23px; }

.fixed-plugin .badge.active,
.fixed-plugin .badge:hover {
  border-color: #00bbff; }

.fixed-plugin .badge-blue {
  background-color: #00bcd4; }

.fixed-plugin .badge-green {
  background-color: #4caf50; }

.fixed-plugin .badge-orange {
  background-color: #ff9800; }

.fixed-plugin .badge-purple {
  background-color: #9c27b0; }

.fixed-plugin .badge-red {
  background-color: #f44336; }

.fixed-plugin .badge-rose {
  background-color: #e91e63; }

.fixed-plugin .badge-black {
  background-color: #000; }

.fixed-plugin .badge-white {
  background-color: rgba(200, 200, 200, 0.2); }

.fixed-plugin h5 {
  font-size: 14px;
  margin: 10px; }

.fixed-plugin .dropdown-menu li {
  display: block;
  padding: 5px 2px;
  width: 25%;
  float: left; }

.fixed-plugin li.adjustments-line,
.fixed-plugin li.header-title,
.fixed-plugin li.button-container {
  width: 100%;
  height: 50px;
  min-height: inherit; }

.fixed-plugin li.button-container {
  height: auto; }

.fixed-plugin li.button-container div {
  margin-bottom: 5px; }

.fixed-plugin #sharrreTitle {
  text-align: center;
  padding: 10px 0;
  height: 50px; }

.fixed-plugin li.header-title {
  height: 30px;
  line-height: 25px;
  font-size: 12px;
  font-weight: 600;
  text-align: center;
  text-transform: uppercase; }

.fixed-plugin .adjustments-line p {
  float: left;
  display: inline-block;
  margin-bottom: 0;
  font-size: 1em;
  color: #3C4858; }

.fixed-plugin .adjustments-line a .badge-colors {
  position: relative;
  top: -2px; }

.fixed-plugin .adjustments-line .togglebutton {
  float: right; }

.fixed-plugin .adjustments-line .togglebutton .toggle {
  margin-right: 0; }

.fixed-plugin .dropdown-menu > li.adjustments-line > a {
  padding-right: 0;
  padding-left: 0;
  border-bottom: 1px solid #ddd;
  border-radius: 0;
  margin: 0; }

.fixed-plugin .dropdown-menu > li > a.img-holder {
  font-size: 16px;
  text-align: center;
  border-radius: 10px;
  background-color: #FFF;
  border: 3px solid #FFF;
  padding-left: 0;
  padding-right: 0;
  opacity: 1;
  cursor: pointer;
  max-height: 100px;
  overflow: hidden;
  padding: 0; }

.fixed-plugin .dropdown-menu > li > a.switch-trigger:hover,
.fixed-plugin .dropdown-menu > li > a.switch-trigger:focus {
  background-color: transparent; }

.fixed-plugin .dropdown-menu > li:hover > a.img-holder,
.fixed-plugin .dropdown-menu > li:focus > a.img-holder {
  border-color: rgba(0, 187, 255, 0.53); }

.fixed-plugin .dropdown-menu > .active > a.img-holder,
.fixed-plugin .dropdown-menu > .active > a.img-holder {
  border-color: #00bbff;
  background-color: #FFFFFF; }

.fixed-plugin .dropdown-menu > li > a img {
  margin-top: auto; }

.fixed-plugin .btn-social {
  width: 50%;
  display: block;
  width: 48%;
  float: left;
  font-weight: 600; }

.fixed-plugin .btn-social i {
  margin-right: 5px; }

.fixed-plugin .btn-social:first-child {
  margin-right: 2%; }

.fixed-plugin .dropdown .dropdown-menu {
  -webkit-transform: translateY(-15%);
  transform: translateY(-15%);
  top: 27px;
  opacity: 0;
  -webkit-transform-origin: 0 0;
          transform-origin: 0 0; }

.fixed-plugin .dropdown.open .dropdown-menu {
  opacity: 1;
  -webkit-transform: translateY(-13%);
  transform: translateY(-13%);
  -webkit-transform-origin: 0 0;
          transform-origin: 0 0; }

.fixed-plugin .dropdown-menu:before,
.fixed-plugin .dropdown-menu:after {
  content: "";
  display: inline-block;
  position: absolute;
  top: 78px;
  width: 16px;
  transform: translateY(-50%);
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%); }

.fixed-plugin .dropdown-menu:before {
  border-bottom: 16px solid transparent;
  border-left: 16px solid rgba(0, 0, 0, 0.2);
  border-top: 16px solid transparent;
  right: -17px; }

.fixed-plugin .dropdown-menu:after {
  border-bottom: 16px solid transparent;
  border-left: 16px solid #FFFFFF;
  border-top: 16px solid transparent;
  right: -16px; }

.wrapper-full-page ~ .fixed-plugin .dropdown.open .dropdown-menu {
  -webkit-transform: translateY(-17%);
  transform: translateY(-17%); }

.wrapper-full-page ~ .fixed-plugin .dropdown .dropdown-menu {
  -webkit-transform: translateY(-19%);
  transform: translateY(-19%); }

.fixed-plugin {
  top: 120px; }

@media (max-width: 991px) {
  .wrapper-full-page ~ .fixed-plugin .dropdown-menu:after,
  .wrapper-full-page ~ .fixed-plugin .dropdown-menu:before {
    top: 99px; }
  .wrapper-full-page ~ .fixed-plugin .adjustments-line a .badge-colors {
    top: 3px; }
  .wrapper-full-page ~ .fixed-plugin .adjustments-line + .header-title {
    margin-top: 15px; }
  .fixed-plugin .dropdown-menu {
    right: 81px;
    width: 250px; }
  .fixed-plugin li.button-container {
    height: auto; }
  .fixed-plugin .adjustments-line .switch {
    float: right;
    margin: 0 0px; }
  .fixed-plugin li.header-title {
    height: 40px; }
  .fixed-plugin .dropdown .dropdown-menu {
    top: 10px; }
  .fixed-plugin .dropdown-menu:after,
  .fixed-plugin .dropdown-menu:before {
    top: 96px; }
  .fixed-plugin .dropdown-menu > li > a.img-holder {
    max-height: 75px; }
  .fixed-plugin {
    top: 80px; } }
</style>
<!--<script type="text/javascript" charset="utf-8" async="" src="dashboard.module.chunk.js" style=""></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/30/4/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/30/4/util.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/30/4/stats.js"></script><script type="text/javascript" charset="utf-8" async="" src="widgets.module.chunk.js"></script><script type="text/javascript" charset="utf-8" async="" src="user.module.chunk.js"></script><script type="text/javascript" charset="utf-8" async="" src="timeline.module.chunk.js"></script><script type="text/javascript" charset="utf-8" async="" src="pages.module.chunk.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="./js/controller.js"></script>
</head>
	<body>
		<div ng-controller = 'gooruDashboardController' class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6" ng-click = "loadUsersGraph()">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="orange">
                        <i class="material-icons">people</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Users</p>
                        <h3 class="card-title">184</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-danger">warning</i>
                            <a href="#pablo">Get More Space...</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6" ng-click = "loadNewUsersGraph()">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="red">
                        <i class="material-icons">peopleadd</i>
                    </div>
                    <div class="card-content">
                        <p class="category">New Users</p>
                        <h3 class="card-title">75.521</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">local_offer</i> Google Analytics
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6" ng-click = "loadEventsGraph()">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="green">
                        <i class="material-icons">event</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Events</p>
                        <h3 class="card-title">$3,245</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">date_range</i> Last 24 Hours
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="blue">
                        <i class="fa fa-twitter"></i>
                    </div>
                    <div class="card-content">
                        <p class="category">Followers</p>
                        <h3 class="card-title">+245</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">update</i> Just Updated
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--<div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card card-product">
                    <div class="card-image" data-header-animation="true">
                        <a href="#pablo">
                            <img class="img" src="../assets/img/card-2.jpeg">
                        </a>
                    </div>
                    <div class="card-content">
                        <div class="card-actions">
                            <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                <i class="material-icons">build</i> Fix Header!
                            </button>
                            <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="View">
                                <i class="material-icons">art_track</i>
                            </button>
                            <button type="button" class="btn btn-success btn-simple" rel="tooltip" data-placement="bottom" title="Edit">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="Remove">
                                <i class="material-icons">close</i>
                            </button>
                        </div>
                        <h4 class="card-title">
                            <a href="#pablo">Cozy 5 Stars Apartment</a>
                        </h4>
                        <div class="card-description">
                            The place is close to Barceloneta Beach and bus stop just 2 min by walk and...
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="price">
                            <h4>$899/night</h4>
                        </div>
                        <div class="stats pull-right">
                            <p class="category"><i class="material-icons">place</i> Barcelona, Spain</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card card-product">
                    <div class="card-image" data-header-animation="true">
                        <a href="#pablo">
                            <img class="img" src="../assets/img/card-3.jpeg">
                        </a>
                    </div>
                    <div class="card-content">
                        <div class="card-actions">
                            <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                <i class="material-icons">build</i> Fix Header!
                            </button>
                            <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="View">
                                <i class="material-icons">art_track</i>
                            </button>
                            <button type="button" class="btn btn-success btn-simple" rel="tooltip" data-placement="bottom" title="Edit">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="Remove">
                                <i class="material-icons">close</i>
                            </button>
                        </div>
                        <h4 class="card-title">
                            <a href="#pablo">Office Studio</a>
                        </h4>
                        <div class="card-description">
                            The place is close to Metro Station and bus stop just 2 min by walk and near...
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="price">
                            <h4>$1.119/night</h4>
                        </div>
                        <div class="stats pull-right">
                            <p class="category"><i class="material-icons">place</i> London, UK</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card card-product">
                    <div class="card-image" data-header-animation="true">
                        <a href="#pablo">
                            <img class="img" src="../assets/img/card-1.jpeg">
                        </a>
                    </div>
                    <div class="card-content">
                        <div class="card-actions">
                            <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                <i class="material-icons">build</i> Fix Header!
                            </button>
                            <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="View">
                                <i class="material-icons">art_track</i>
                            </button>
                            <button type="button" class="btn btn-success btn-simple" rel="tooltip" data-placement="bottom" title="Edit">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="Remove">
                                <i class="material-icons">close</i>
                            </button>
                        </div>
                        <h4 class="card-title">
                            <a href="#pablo">Beautiful Castle</a>
                        </h4>
                        <div class="card-description">
                            The place is close to Metro Station and bus stop just 2 min by walk and near...
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="price">
                            <h4>$459/night</h4>
                        </div>
                        <div class="stats pull-right">
                            <p class="category"><i class="material-icons">place</i> Milan, Italy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="red">
                        <i class="material-icons">timeline</i>
                    </div>
                    <div id = "timelineControls">
                          <button class="btn btn-{{ btnClassDay}}" ng-click = "displayByDay()">Day</button>
                          <button class="btn btn-{{ btnClassWeek }}" ng-class = "activeButton" ng-click = "displayByWeek()">Week</button>
                          <button class="btn btn-{{ btnClassMonth }}" ng-class = "activeButton" ng-click = "displayByMonth()">Month</button>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">{{ graphTitle }} {{ graphPeriod }}</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="300px" class="ct-chart-line" style="width: 100%; height: 300px;">
                                  <g class="ct-grids">
                                    <line y1="265" y2="265" x1="50" x2="463" class="ct-grid ct-vertical"></line>
                                    <line y1="240" y2="240" x1="50" x2="463" class="ct-grid ct-vertical"></line>
                                    <line y1="215" y2="215" x1="50" x2="463" class="ct-grid ct-vertical"></line>
                                    <line y1="190" y2="190" x1="50" x2="463" class="ct-grid ct-vertical"></line>
                                    <line y1="165" y2="165" x1="50" x2="463" class="ct-grid ct-vertical"></line>
                                    <line y1="140" y2="140" x1="50" x2="463" class="ct-grid ct-vertical"></line>
                                    <line y1="115" y2="115" x1="50" x2="463" class="ct-grid ct-vertical"></line>
                                    <line y1="90" y2="90" x1="50" x2="463" class="ct-grid ct-vertical"></line>
                                    <line y1="65" y2="65" x1="50" x2="463" class="ct-grid ct-vertical"></line>
                                    <line y1="40" y2="40" x1="50" x2="463" class="ct-grid ct-vertical"></line>
                                    <line y1="15" y2="15" x1="50" x2="463" class="ct-grid ct-vertical"></line>
                                  </g>
                                  <g>
                                    <g class="ct-series ct-series-a">
                                    <path d="M 50 193.25 C 56.883 185.208 77.533 145.125 91.3 145 C 105.067 144.875 118.833 195.583 132.6 192.5 C 146.367 189.417 160.133 143.167 173.9 126.5 C 187.667 109.833 201.433 98.167 215.2 92.5 C 228.967 86.833 242.733 84.583 256.5 92.5 C 270.267 100.417 284.033 142.583 297.8 140 C 311.567 137.417 325.333 83.25 339.1 77 C 352.867 70.75 366.633 108.667 380.4 102.5 C 394.167 96.333 407.933 52.25 421.7 40 C 435.467 27.75 456.117 30.833 463 29" class="ct-line"></path>
                                    <line x1="50" y1="193.25" x2="50.01" y2="193.25" class="ct-point" value="287" opacity="1"></line>
                                    <line x1="91.3" y1="145" x2="91.31" y2="145" class="ct-point" value="480" opacity="1"></line>
                                    <line x1="132.6" y1="192.5" x2="132.60999999999999" y2="192.5" class="ct-point" value="290" opacity="1"></line>
                                    <line x1="173.89999999999998" y1="126.5" x2="173.90999999999997" y2="126.5" class="ct-point" value="554" opacity="1"></line>
                                    <line x1="215.2" y1="92.5" x2="215.20999999999998" y2="92.5" class="ct-point" value="690" opacity="1"></line>
                                    <line x1="256.5" y1="92.5" x2="256.51" y2="92.5" class="ct-point" value="690" opacity="1"></line>
                                    <line x1="297.79999999999995" y1="140" x2="297.80999999999995" y2="140" class="ct-point" value="500" opacity="1"></line>
                                    <line x1="339.09999999999997" y1="77" x2="339.10999999999996" y2="77" class="ct-point" value="752" opacity="1"></line>
                                    <line x1="380.4" y1="102.5" x2="380.40999999999997" y2="102.5" class="ct-point" value="650" opacity="1"></line>
                                    <line x1="421.7" y1="40" x2="421.71" y2="40" class="ct-point" value="900" opacity="1"></line>
                                    <line x1="463" y1="29" x2="463.01" y2="29" class="ct-point" value="944" opacity="1"></line>
                                    </g>
                                  </g>
                                  <g class="ct-labels">
                                  <!--horizontal axis-->
                                  <foreignObject style="overflow: visible;" x="50" y="270" width="41.3" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">1</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="91.3" y="270" width="41.3" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">2</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="132.6" y="270" width="41.3" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">3</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="173.89999999999998" y="270" width="41.3" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">4</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="215.2" y="270" width="41.30000000000001" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">5</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="256.5" y="270" width="41.29999999999998" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">6</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="297.79999999999995" y="270" width="41.29999999999998" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">7</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="339.09999999999997" y="270" width="41.30000000000001" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">8</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="380.4" y="270" width="41.30000000000001" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">9</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="421.7" y="270" width="41.30000000000001" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">10</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="463" y="270" width="41.30000000000001" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">11</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="504.3" y="270" width="41.30000000000001" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">12</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="545.6" y="270" width="41.30000000000001" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">13</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="586.9" y="270" width="41.30000000000001" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">14</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="628.2" y="270" width="41.30000000000001" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">15</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="669.5" y="270" width="41.30000000000001" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">16</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="710.8" y="270" width="41.30000000000001" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">17</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="752.1" y="270" width="41.30000000000001" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">18</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="793.4" y="270" width="41.30000000000001" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">19</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="834.7" y="270" width="41.30000000000001" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">20</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="876" y="270" width="41.30000000000001" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">21</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="917.3" y="270" width="41.30000000000001" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">22</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="958.6" y="270" width="41.30000000000001" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">23</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="999.9" y="270" width="41.30000000000001" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">24</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="1041.2" y="270" width="41.30000000000001" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">25</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="1082.5" y="270" width="41.30000000000001" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">26</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="1123.8" y="270" width="41.30000000000001" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">27</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="1165.1" y="270" width="41.30000000000001" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">28</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="1206.4" y="270" width="41.30000000000001" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">29</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="1247.7" y="270" width="41.30000000000001" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">30</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" x="1289" y="270" width="41.30000000000001" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">31</span>
                                  </foreignObject>
                                  <!--vertical axis-->

                                  <foreignObject style="overflow: visible;" y="240" x="10" height="25" width="30">
                                    <span class="ct-label ct-vertical ct-start" style="height: 25px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">0</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" y="215" x="10" height="25" width="30">
                                    <span class="ct-label ct-vertical ct-start" style="height: 25px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">100</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" y="190" x="10" height="25" width="30">
                                    <span class="ct-label ct-vertical ct-start" style="height: 25px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">200</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" y="165" x="10" height="25" width="30">
                                    <span class="ct-label ct-vertical ct-start" style="height: 25px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">300</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" y="140" x="10" height="25" width="30">
                                    <span class="ct-label ct-vertical ct-start" style="height: 25px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">400</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" y="115" x="10" height="25" width="30">
                                    <span class="ct-label ct-vertical ct-start" style="height: 25px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">500</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" y="90" x="10" height="25" width="30">
                                    <span class="ct-label ct-vertical ct-start" style="height: 25px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">600</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" y="65" x="10" height="25" width="30">
                                    <span class="ct-label ct-vertical ct-start" style="height: 25px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">700</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" y="40" x="10" height="25" width="30">
                                    <span class="ct-label ct-vertical ct-start" style="height: 25px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">800</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" y="15" x="10" height="25" width="30">
                                    <span class="ct-label ct-vertical ct-start" style="height: 25px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">900</span>
                                  </foreignObject>
                                  <foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30">
                                    <span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">1000</span>
                                  </foreignObject>
                                </g>
                              </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="row">
            <div class="col-md-4">
                <div class="card card-chart">
                    <div class="card-header" data-background-color="green" data-header-animation="true">
                        <div class="ct-chart" id="dailySalesChart"></div>
                    </div>
                    <div class="card-content">
                        <div class="card-actions">
                            <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                <i class="material-icons">build</i> Fix Header!
                            </button>
                            <button type="button" class="btn btn-info btn-simple" rel="tooltip" data-placement="bottom" title="Refresh">
                                <i class="material-icons">refresh</i>
                            </button>
                            <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="Change Date">
                                <i class="material-icons">edit</i>
                            </button>
                        </div>
                        <h4 class="card-title">Daily Sales</h4>
                        <p class="category">
                            <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> updated 4 minutes ago
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-chart">
                    <div class="card-header" data-background-color="orange" data-header-animation="true">
                        <div class="ct-chart" id="completedTasksChart"></div>
                    </div>
                    <div class="card-content">
                        <div class="card-actions">
                            <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                <i class="material-icons">build</i> Fix Header!
                            </button>
                            <button type="button" class="btn btn-info btn-simple" rel="tooltip" data-placement="bottom" title="Refresh">
                                <i class="material-icons">refresh</i>
                            </button>
                            <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="Change Date">
                                <i class="material-icons">edit</i>
                            </button>
                        </div>
                        <h4 class="card-title">Completed Tasks</h4>
                        <p class="category">Last Campaign Performance</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> campaign sent 2 days ago
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-chart">
                    <div class="card-header" data-background-color="red" data-header-animation="true">
                        <div class="ct-chart" id="websiteViewsChart"></div>
                    </div>
                    <div class="card-content">
                        <div class="card-actions">
                            <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                <i class="material-icons">build</i> Fix Header!
                            </button>
                            <button type="button" class="btn btn-info btn-simple" rel="tooltip" data-placement="bottom" title="Refresh">
                                <i class="material-icons">refresh</i>
                            </button>
                            <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="Change Date">
                                <i class="material-icons">edit</i>
                            </button>
                        </div>
                        <h4 class="card-title">Website Views</h4>
                        <p class="category">Last Campaign Performance</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> campaign sent 2 days ago
                        </div>
                    </div>
                </div>
            </div>
        </div>-->



    </div>
</div>

	</body>
</html>