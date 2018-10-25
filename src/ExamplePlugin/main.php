<?php

    //ここまでのフォルダパス
    namespace ExamplePlugin;

    //PluginBaseを使う
    use pocketmine\plugin\PluginBase;
    //Listenerを使う
    use pocketmine\event\Listener;
    //PlayerJoinEventを使う
    use pocketmine\event\player\PlayerJoinEvent;

    //クラスの宣言
    class main extends PluginBase implements Listener
    {
        //プラグインが読み込まれたとき
        public function onEnable(): void
        {
            //コンソールにメッセージを送る
            $this->getLogger()->info("このプラグイン が読み込まれました");
            //イベントを使えるようにする
            $this->getServer()->getPluginManager()->registerEvents($this, $this);
        }

        //プレイヤーがサーバーに来た時
        public function onJoin(PlayerJoinEvent $event)
        {
            //$playerにプレイヤーオブジェクトを代入する
            $player = $event->getPlayer();
            //$nameにプレイヤー名を代入する
            $name = $player->getName();

            //メッセージを送る
            $player->sendMessage("メッセージ内容");
        }

    }