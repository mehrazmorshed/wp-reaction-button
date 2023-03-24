/**
 *
 * WP Reaction Button Script File
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
}

// create function for straight button
function straightFunction() {
  var element2 = document.getElementById("straight");
  element2.classList.toggle("big");
  var element3 = document.getElementById("sad");
  element3.classList.toggle("small");
  var element1 = document.getElementById("smile");
  element1.classList.toggle("small");
}

// create function for sad button
function sadFunction() {
  var element3 = document.getElementById("sad");
  element3.classList.toggle("big");
  var element1 = document.getElementById("smile");
  element1.classList.toggle("small");
  var element2 = document.getElementById("straight");
  element2.classList.toggle("small");
}
