 $(".planet").planetarium({
   autospin: "1000ms",                                  // You can define the speed of which your planet spin here. This option accepts the second or milliseconds in forms of "1s" and "1000ms" respectively. The default value is 1000ms.
   angle: "20deg",                                      // You can define the degree in which your planet will be tilted. Make sure you end the value with deg. The default value is 20deg.
   glow: "rgba(255, 255, 255, 0.34902) 0px 0px 50px, inset 33px 20px 50px rgba(0,0,0,0.5)", // You can define the glow and shadow of your planet here. This option accepts normal box-shadow styles. The default value is as shown. The first part, "rgba(255, 255, 255, 0.34902) 0px 0px 50px", is the glow effect and the second part, "inset 33px 20px 50px rgba(0,0,0,0.5)", is the shadow.
   pattern: "img/texture-earth.jpg",                    // You can define your custom planet's pattern here. The option accepts image path. Equal size with the pattern-earth.jpg provided is recommended. The default value is "img/texture-earth.jpg".
   size: "100x100",                                     // You can define the width and height of your planets here in a format of "(width)x(height)". The default value is 100x100.
   float: true,                                         // You can toggle the floating animation here. Set it to false to disable it. The default value is true.
   space: "body",                                       // You can define the container's selector to be used as the Space here. The default value is "body".
   ring: false,                                         // You can toggle the ring of your planet here. To enable the ring, set this to true. The default value is false.
   ringColor: "#fff",                                   // You can set the ring's color here. The option accepts HEX color code. The default value is "#fff".
   ringAngle: "20deg"                                   // You can define the angle of the ring here. Make sure you end the value with deg like this: "180deg". The default option is "20deg".
 });