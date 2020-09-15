<?php

abstract class homeMade
{
	//縫
	public abstract function sew();
	//填充
	public abstract function stuff();	
}


//娃娃
class Doll extends homeMade
{
	public function sew()
	{
		echo "縫娃娃。<br />";
	}
	public function stuff()
	{
		echo "填充娃娃。<br />";
	}
}

//枕頭
class Pillow extends homeMade
{
	public function sew()
	{
		echo "縫枕頭。<br />";
	}
	public function stuff()
	{
		echo "填充枕頭。<br />";
	}
}

//坐墊
class Cushion extends homeMade
{
	public function sew()
	{
		echo "縫坐墊。<br />";
	}
	public function stuff()
	{
		echo "填充坐墊。<br />";
	}
}



//工廠
class HomeMadeFactory
{

	public static function createHomeMade ($furni_type)
	{
		switch ($furni_type) {
			case 'Doll':
				return new Doll();
				break;
			
			case 'Pillow':
				return new Pillow();
				break;
			
			case 'Cushion':
				return new Cushion();
				break;

			default:
				return null;
				break;


		}
	}

}

$Cushion = HomeMadeFactory::createHomeMade('Cushion');
$Cushion->sew();
$Cushion->stuff();
$Doll = HomeMadeFactory::createHomeMade('Doll');
$Doll->sew();
$Doll->stuff();
$Pillow = HomeMadeFactory::createHomeMade('Pillow');
$Pillow->sew();
$Pillow->stuff();