// import 'bootstrap.bundle.min.js'
import "./bootstrap.bundle.min.js";

// initialize all popovers
document.querySelectorAll('[data-bs-toggle="popover"]').forEach((popover) => {
	new bootstrap.Popover(popover);
});

sourceMappingURL = bootstrap.bundle.min.js.map;
