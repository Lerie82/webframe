<?php
/*
Author: Lerie Taylor
Date: 2021
Filename: plugins/MyBlog.class.php
Description: blog wrapper
*/
class MyTemplate
{
	public function __construct($config_loc)
	{
		if(!file_exists($config_loc))
		{
			die(var_dump("config file not found"));
		}

		$this->t_config = json_decode(file_get_contents($config_loc));

		$this->addBlock("<!doctype html><html lang=\"en\"><head>");
		$this->addBlock("<meta charset=\"utf-8\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"><meta name=\"description\" content=\"\"><meta name=\"author\" content=\"\">\n");
		$this->addBlock("<title>".$this->t_config->title."</title>");
		$this->addCss();
		$this->addBlock('<body class="text-center">
		    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
		      <header class="masthead mb-auto">
		        <div class="inner">
		          <h3 class="masthead-brand">Cover</h3>
		          <nav class="nav nav-masthead justify-content-center">
		            <a class="nav-link active" href="'.$this->t_config->strings->link1_url.'">'.$this->t_config->strings->link1.'</a>
		            <a class="nav-link" href="'.$this->t_config->strings->link2_url.'">'.$this->t_config->strings->link2.'</a>
		            <a class="nav-link" href="'.$this->t_config->strings->link3_url.'">'.$this->t_config->strings->link3.'</a>
		          </nav>
		        </div>
		      </header>

		      <main role="main" class="inner cover">
		        <h1 class="cover-heading">'.$this->t_config->strings->hero_heading.'</h1>
		        <p class="lead">'.$this->t_config->strings->hero_subhead.'</p>
		        <p class="lead">
		          <a href="#" class="btn btn-lg btn-secondary">'.$this->t_config->strings->btn1_text.'</a>
		        </p>
		      </main>

		      <footer class="mastfoot mt-auto">
		        <div class="inner">
		          <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
		        </div>
		      </footer>
		    </div>');
		$this->addJs();
		$this->addBlock('</body></html>');
	}

	private function addCss()
	{
		foreach($this->t_config->css as $file)
		{
			for($i=0;$i<count($file);$i++)
			{
				$this->html .= "<link rel=\"stylesheet\" href=\"".$file[$i]."\" />\n";
			}
		}
	}

	private function addJs()
	{
		foreach($this->t_config->js as $file)
		{
			for($i=0;$i<count($file);$i++)
			{
				$this->html .= "<scrpt src=\"".$file[$i]."\"></script>\n";
			}
		}
	}

	public function addBlock($code)
	{
		$this->html .= $code;
	}

	public function getHtml()
	{
		return $this->html;
	}
}