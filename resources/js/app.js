import "./bootstrap";
import "scrollreveal";

import { gsap } from "gsap/dist/gsap";
import Lenis from "lenis";

import { library, dom } from "@fortawesome/fontawesome-svg-core";
import { fab } from "@fortawesome/free-brands-svg-icons";
import { fas } from "@fortawesome/free-solid-svg-icons";
library.add(fab, fas);
dom.watch();

// Inisialisasi Lenis (smooth scroll)
const lenis = new Lenis();
function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
}
requestAnimationFrame(raf);
