<!DOCTYPE html>
<html class="no-js">
    <?php include('inc-head.php'); ?>
    <body style="visibility:hidden;">
        <div id="loader" class="center">
            <svg class="pl" viewBox="0 0 128 128" width="128px" height="128px">
            	<defs>
            		<linearGradient id="pl-grad" x1="0" y1="0" x2="0" y2="1">
            			<stop offset="0%" stop-color="#000" />
            			<stop offset="100%" stop-color="#fff" />
            		</linearGradient>
            		<mask id="pl-mask">
            			<rect x="0" y="0" width="128" height="128" fill="url(#pl-grad)" />
            		</mask>
            	</defs>
            	<g stroke-dasharray="32 32" stroke-dashoffset="-32" stroke-linecap="round" stroke-width="6">
            		<g class="pl__layer">
            			<g class="pl__lines" stroke="hsl(48,90%,50%)">
            				<g class="pl__line-g" transform="rotate(0,64,64) translate(0,-28)" >
            					<polyline class="pl__line" points="64 32,64 64" />
            				</g>
            				<g class="pl__line-g" transform="rotate(30,64,64) translate(0,-28)" >
            					<polyline class="pl__line" points="64 32,64 64" />
            				</g>
            				<g class="pl__line-g" transform="rotate(60,64,64) translate(0,-28)" >
            					<polyline class="pl__line" points="64 32,64 64" />
            				</g>
            				<g class="pl__line-g" transform="rotate(90,64,64) translate(0,-28)" >
            					<polyline class="pl__line" points="64 32,64 64" />
            				</g>
            				<g class="pl__line-g" transform="rotate(120,64,64) translate(0,-28)" >
            					<polyline class="pl__line" points="64 32,64 64" />
            				</g>
            				<g class="pl__line-g" transform="rotate(150,64,64) translate(0,-28)" >
            					<polyline class="pl__line" points="64 32,64 64" />
            				</g>
            				<g class="pl__line-g" transform="rotate(180,64,64) translate(0,-28)" >
            					<polyline class="pl__line" points="64 32,64 64" />
            				</g>
            				<g class="pl__line-g" transform="rotate(210,64,64) translate(0,-28)" >
            					<polyline class="pl__line" points="64 32,64 64" />
            				</g>
            				<g class="pl__line-g" transform="rotate(240,64,64) translate(0,-28)" >
            					<polyline class="pl__line" points="64 32,64 64" />
            				</g>
            				<g class="pl__line-g" transform="rotate(270,64,64) translate(0,-28)" >
            					<polyline class="pl__line" points="64 32,64 64" />
            				</g>
            				<g class="pl__line-g" transform="rotate(300,64,64) translate(0,-28)" >
            					<polyline class="pl__line" points="64 32,64 64" />
            				</g>
            				<g class="pl__line-g" transform="rotate(330,64,64) translate(0,-28)" >
            					<polyline class="pl__line" points="64 32,64 64" />
            				</g>
            			</g>
            		</g>
            		<g class="pl__layer" mask="url(#pl-mask)">
            			<g class="pl__lines" stroke="hsl(18,90%,50%)">
            				<g class="pl__line-g" transform="rotate(0,64,64) translate(0,-28)" >
            					<polyline class="pl__line" points="64 32,64 64" />
            				</g>
            				<g class="pl__line-g" transform="rotate(30,64,64) translate(0,-28)" >
            					<polyline class="pl__line" points="64 32,64 64" />
            				</g>
            				<g class="pl__line-g" transform="rotate(60,64,64) translate(0,-28)" >
            					<polyline class="pl__line" points="64 32,64 64" />
            				</g>
            				<g class="pl__line-g" transform="rotate(90,64,64) translate(0,-28)" >
            					<polyline class="pl__line" points="64 32,64 64" />
            				</g>
            				<g class="pl__line-g" transform="rotate(120,64,64) translate(0,-28)" >
            					<polyline class="pl__line" points="64 32,64 64" />
            				</g>
            				<g class="pl__line-g" transform="rotate(150,64,64) translate(0,-28)" >
            					<polyline class="pl__line" points="64 32,64 64" />
            				</g>
            				<g class="pl__line-g" transform="rotate(180,64,64) translate(0,-28)" >
            					<polyline class="pl__line" points="64 32,64 64" />
            				</g>
            				<g class="pl__line-g" transform="rotate(210,64,64) translate(0,-28)" >
            					<polyline class="pl__line" points="64 32,64 64" />
            				</g>
            				<g class="pl__line-g" transform="rotate(240,64,64) translate(0,-28)" >
            					<polyline class="pl__line" points="64 32,64 64" />
            				</g>
            				<g class="pl__line-g" transform="rotate(270,64,64) translate(0,-28)" >
            					<polyline class="pl__line" points="64 32,64 64" />
            				</g>
            				<g class="pl__line-g" transform="rotate(300,64,64) translate(0,-28)" >
            					<polyline class="pl__line" points="64 32,64 64" />
            				</g>
            				<g class="pl__line-g" transform="rotate(330,64,64) translate(0,-28)" >
            					<polyline class="pl__line" points="64 32,64 64" />
            				</g>
            			</g>
            		</g>
            	</g>
            </svg>
        </div>
        <?php include('header.php'); ?>
            <?php include('sidebar.php'); ?>
            <?php include('breadcrumb.php'); ?>
            <?php include('pages/'.$page_name.'.php'); ?>
        <?php include('inc-footer.php'); ?>
        <?php include('script.php'); ?>
    </body>
</html>