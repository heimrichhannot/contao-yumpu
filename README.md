# Yumpu

Watch responsive Yumpu documents within contao. 
For more information visit: http://www.yumpu.com/

## Features

- tl_content element
- tl_news support 

Add the following markup to your news template (e.g. news_full) 
```
<div class="yumpu-embed">
	<iframe src="https://www.yumpu.com/de/embed/view/<?php echo $this->yumpuConfigID; ?>" frameborder="0" allowfullscreen="true" allowtransparency="true"></iframe>
</div>
```
