/**
 *
 * WP Reaction Button Scripts
 * @package WPReactionButton
 * Author: Mehraz Morshed
 * Copyright 2023 WPDeveloper
 *
 */

// create function for smile button
function smileFunction() {
  var element1 = document.getElementById("smile");
  element1.classList.toggle("big");
  var element2 = document.getElementById("straight");
  element2.classList.toggle("small");
  var element3 = document.getElementById("sad");
  element3.classList.toggle("small");
  var element4 = document.getElementById("count");
  element4.classList.toggle("count-smile");
}

// create function for straight button
function straightFunction() {
  var element2 = document.getElementById("straight");
  element2.classList.toggle("big");
  var element3 = document.getElementById("sad");
  element3.classList.toggle("small");
  var element1 = document.getElementById("smile");
  element1.classList.toggle("small");
  var element4 = document.getElementById("count");
  element4.classList.toggle("count-straight");
}

// create function for sad button
function sadFunction() {
  var element3 = document.getElementById("sad");
  element3.classList.toggle("big");
  var element1 = document.getElementById("smile");
  element1.classList.toggle("small");
  var element2 = document.getElementById("straight");
  element2.classList.toggle("small");
  var element4 = document.getElementById("count");
  element4.classList.toggle("count-sad");
}
