/**
 * javascript.js
 */

canvas                    = O('logo');
context                   = canvas.getContext('2d');
context.font              = 'bold italic 97px Georgia';
context.textBaseline      = 'top';
image                     = new Image();
image.src                 = '../images/amarinlogo1.jpg';

image.onload = function()
{
    gradient = context.createLinearGradient(0, 0, 0, 89);
    gradient.addColorStop(0.00, '#4fa');
    gradient.addColorStop(0.66, '#fbf');
    context.fillStyle = gradient;
    context.fillText(   "Amarin Financial Group", 0, 0);
    context.drawImage( image, 510, 12);
};

function O(obj)
{
    if (typeof obj == 'object') return obj;
    else return document.getElementById(obj)
}

function S(obj)
{
    return O(obj).style
}

function C(name)
{
    var elements = document.getElementsByTagName('*');
    var objects  = [];

    for (var i = 0; i < elements.length; ++i)
      if (elements[i].className == name)
      objects.push(elements[i]);
    return objects
}
