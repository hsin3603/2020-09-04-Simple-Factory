<?php

abstract class handleWood
{
	//雕刻
	public abstract function carve();
	//打蠟
	public abstract function wax();	
}


//椅子
class Chair extends handleWood
{
	public function carve()
	{
		echo "雕刻椅子。<br />";
	}
	public function wax()
	{
		echo "打蠟椅子。<br />";
	}
}

//雕像
class Stature extends handleWood
{
	public function carve()
	{
		echo "雕刻雕像。<br />";
	}
	public function wax()
	{
		echo "打蠟雕像。<br />";
	}
}

//桌子
class Desk extends handleWood
{
	public function carve()
	{
		echo "雕刻桌子。<br />";
	}
	public function wax()
	{
		echo "打蠟桌子。<br />";
	}
}



//工廠
class FurnitureFactory
{

	public static function createFurniture ($furni_type)
	{
		switch ($furni_type) {
			case 'Chair':
				return new Chair();
				break;
			
			case 'Stature':
				return new Stature();
				break;
			
			case 'Desk':
				return new Desk();
				break;

			default:
				return null;
				break;


		}
	}

}

$Desk = FurnitureFactory::createFurniture('Desk');
$Desk->carve();
$Desk->wax();
$Chair = FurnitureFactory::createFurniture('Chair');
$Chair->carve();
$Chair->wax();
$Stature = FurnitureFactory::createFurniture('Stature');
$Stature->carve();
$Stature->wax();