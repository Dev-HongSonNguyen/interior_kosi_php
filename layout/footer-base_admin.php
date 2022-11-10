<script>
	var HOST_URL = "";
</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>
	var KTAppSettings = {
		"breakpoints": {
			"sm": 576,
			"md": 768,
			"lg": 992,
			"xl": 1200,
			"xxl": 1400
		},
		"colors": {
			"theme": {
				"base": {
					"white": "#ffffff",
					"primary": "#3699FF",
					"secondary": "#E5EAEE",
					"success": "#1BC5BD",
					"info": "#8950FC",
					"warning": "#FFA800",
					"danger": "#F64E60",
					"light": "#E4E6EF",
					"dark": "#181C32"
				},
				"light": {
					"white": "#ffffff",
					"primary": "#E1F0FF",
					"secondary": "#EBEDF3",
					"success": "#C9F7F5",
					"info": "#EEE5FF",
					"warning": "#FFF4DE",
					"danger": "#FFE2E5",
					"light": "#F3F6F9",
					"dark": "#D6D6E0"
				},
				"inverse": {
					"white": "#ffffff",
					"primary": "#ffffff",
					"secondary": "#3F4254",
					"success": "#ffffff",
					"info": "#ffffff",
					"warning": "#ffffff",
					"danger": "#ffffff",
					"light": "#464E5F",
					"dark": "#ffffff"
				}
			},
			"gray": {
				"gray-100": "#F3F6F9",
				"gray-200": "#EBEDF3",
				"gray-300": "#E4E6EF",
				"gray-400": "#D1D3E0",
				"gray-500": "#B5B5C3",
				"gray-600": "#7E8299",
				"gray-700": "#5E6278",
				"gray-800": "#3F4254",
				"gray-900": "#181C32"
			}
		},
		"font-family": "Poppins"
	};
</script>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="assets/plugins/global/plugins.bundle.js?v=7.0.5"></script>
<script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.5"></script>
<script src="assets/js/scripts.bundle.js?v=7.0.5"></script>
<!--end::Global Theme Bundle-->
<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.5"></script>
<script src="assets/js/pages/widgets.js?v=7.0.5"></script>
<script src="assets/js/pages/crud/ktdatatable/base/html-table.js?v=7.0.5"></script>
<script src="assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js?v=7.0.5"></script>
<script src="assets/js/pages/crud/forms/editors/ckeditor-classic.js?v=7.0.5"></script>
<script src="assets/js/pages/crud/forms/widgets/select2.js?v=7.0.5"></script>
<script src="assets/js/pages/crud/file-upload/image-input.js?v=7.0.5"></script>
<script src="assets/js/pages/crud/file-upload/dropzonejs.js?v=7.0.5"></script>
<!--end::Page Scripts-->
<script>
	// Class definition
	var KTSelect2 = function() {
		// Private functions
		var base = function() {
			// basic
			$('.select2').select2({
				placeholder: "Lựa chọn ..."
			});
		}

		// Public functions
		return {
			init: function() {
				base();
			}
		};
	}();
	jQuery(document).ready(() => {
		KTSelect2.init();
		var thumb = new KTImageInput('kt_image_1');
	});
</script>
</body>

<!--end::Body-->

</html>