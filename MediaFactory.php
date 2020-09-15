<?php

abstract class Process
{
	//錄製
	public abstract function record();
	//發行
	public abstract function release();	
}

//專輯
class Ablum extends Process
{
	public function record()
	{
		echo "錄製專輯。";
	}
	public function release()
	{
		echo "發行專輯。";
	}
}
//電視劇
class TVshow extends Process
{
	public function record()
	{
		echo "錄製電視劇。";
	}
	public function release()
	{
		echo "發行電視劇。";
	}
}
//電影
class Movie extends Process
{
	public function record()
	{
		echo "錄製電影。";
	}
	public function release()
	{
		echo "發行電影。";
	}
}

//工廠
class MediaFactory
{

	public static function createMedia ($media_type)
	{

			if($media_type == 'Ablum'){
				return new Ablum();
			}

			if($media_type == 'TVshow'){
				return new TVshow();
			}

			if($media_type == 'Movie'){
				return new Movie();
			}
	}

}


$MovieMedia = MediaFactory::createMedia('Movie');
$MovieMedia->record();
echo '<br />';
$MovieMedia->release();
echo '<br />';
$AblumMedia = MediaFactory::createMedia('Ablum');
$AblumMedia->record();
echo '<br />';
$AblumMedia->release();
echo '<br />';
$TVshowMedia = MediaFactory::createMedia('TVshow');
$TVshowMedia->record();
echo '<br />';
$TVshowMedia->release();
echo '<br />';