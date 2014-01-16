<?php

class TextSeeder extends Seeder {

    public function run()
    {
        DB::table('texts')->delete();

$lorem = <<<EOT
Lorem ipsum dolor sit amet, no vim virtute detracto comprehensam, iudico mentitum inimicus ad cum. Ne vocibus civibus corpora sea. Clita nominati ut est, at wisi accumsan cum. Voluptatum persequeris per an, ut aperiri delenit vix. Et agam eros omittantur cum, mutat cetero sed te. Iuvaret voluptaria sententiae ea qui, choro discere reprehendunt at nam.

Ex periculis rationibus usu. Esse omnes lucilius et mei. No vel debet deterruisset, quo an enim omnis dignissim. Errem choro invenire est te, vis semper mandamus intellegebat ei, cum dico omnium an. Cibo tollit causae quo in. Magna aeterno ponderum ad eos, libris fabulas cum no, has audire ceteros platonem ut.

Vim ne diam vitae. Et has maiorum pericula. No doming inermis eos, et prima disputando sea. Ei ludus aperiam tractatos mei. Vim zril debitis facilisi ad. Veri vidit choro mea ex.

Ut stet fabellas mediocritatem usu. Pri solet argumentum at. Cum no agam labitur, te animal neglegentur pro, eam clita iriure et. Veri erroribus ad mel.
EOT;

        Text::create(array(
            'post_id' => 1,
            'text' => $lorem
        ));

        Text::create(array(
            'post_id' => 2,
            'text' => $lorem
        ));

        Text::create(array(
            'post_id' => 3,
            'text' => $lorem
        ));

        Text::create(array(
            'post_id' => 4,
            'text' => $lorem
        ));

        Text::create(array(
            'post_id' => 5,
            'text' => $lorem
        ));
    }

}