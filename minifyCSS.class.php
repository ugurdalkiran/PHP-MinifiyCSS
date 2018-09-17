<?php

	class minifyCSS {

		private static $time = 86400;
		private static $fileName = 'minifyCSS.min.css';

		public static function minify($fileArray){

			clearstatcache(); set_time_limit(86400); date_default_timezone_set("Europe/Istanbul");

			$changeTime = file_exists( dirname(__FILE__).'/'.self::$fileName ) ? filemtime( dirname(__FILE__).'/'.self::$fileName ) : 0;

			if ( time() - self::$time > $changeTime ){

				$content = '';

				foreach ($fileArray as $cssFile){ $content .= file_get_contents($cssFile); }

				self::writeMinify(self::comment(self::buffer($content)));

			}

			echo self::$fileName;

		}

		private static function writeMinify($content){

			$content .= '/* minifyCSS tarafından '.date('d.m.Y H:i:s').' tarihinde oluşturuldu. */';

			$cacheFileOpen = fopen(self::$fileName, "w");
			fwrite($cacheFileOpen, $content);
			fclose($cacheFileOpen);

		}

		private static function comment($str){

			preg_match_all('#/\*(.*?)\*/#', $str, $result);

			foreach ($result[0] as $comment){
				$str = str_replace($comment, '', $str);
			}

			return $str;

		}

		private static function buffer($str){

			$array_1 = array(': ', '; ', ';}', ' {', '{ ', ' }');
			$array_2 = array(':', ';', '}', '{', '{', '}');

			$str = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '   ', '    '), '', $str);
			$str = str_replace($array_1, $array_2, $str);

			return $str;

		}

	}

?>