<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/resources/bidding_strategy.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V5\Resources;

class BiddingStrategy
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a8d040a44676f6f676c652f6164732f676f6f676c656164732f76352f656e756d732f7461726765745f696d7072657373696f6e5f73686172655f6c6f636174696f6e2e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76352e656e756d7322a3010a21546172676574496d7072657373696f6e53686172654c6f636174696f6e456e756d227e0a1d546172676574496d7072657373696f6e53686172654c6f636174696f6e120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e100112140a10414e5957484552455f4f4e5f504147451002120f0a0b544f505f4f465f50414745100312180a144142534f4c5554455f544f505f4f465f50414745100442f7010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76352e656e756d734222546172676574496d7072657373696f6e53686172654c6f636174696f6e50726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76352f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56352e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56355c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56353a3a456e756d73620670726f746f330ac10c0a2c676f6f676c652f6164732f676f6f676c656164732f76352f636f6d6d6f6e2f62696464696e672e70726f746f121e676f6f676c652e6164732e676f6f676c656164732e76352e636f6d6d6f6e1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f224c0a0a436f6d6d697373696f6e12230a16636f6d6d697373696f6e5f726174655f6d6963726f73180220012803480088010142190a175f636f6d6d697373696f6e5f726174655f6d6963726f73220d0a0b456e68616e63656443706322470a094d616e75616c43706312210a14656e68616e6365645f6370635f656e61626c6564180220012808480088010142170a155f656e68616e6365645f6370635f656e61626c6564220b0a094d616e75616c43706d220b0a094d616e75616c43707622150a134d6178696d697a65436f6e76657273696f6e7322430a174d6178696d697a65436f6e76657273696f6e56616c756512180a0b7461726765745f726f61731802200128014800880101420e0a0c5f7461726765745f726f617322bd010a09546172676574437061121e0a117461726765745f6370615f6d6963726f73180420012803480088010112230a166370635f6269645f6365696c696e675f6d6963726f73180520012803480188010112210a146370635f6269645f666c6f6f725f6d6963726f73180620012803480288010142140a125f7461726765745f6370615f6d6963726f7342190a175f6370635f6269645f6365696c696e675f6d6963726f7342170a155f6370635f6269645f666c6f6f725f6d6963726f73220b0a0954617267657443706d228d020a15546172676574496d7072657373696f6e536861726512700a086c6f636174696f6e18012001280e325e2e676f6f676c652e6164732e676f6f676c656164732e76352e656e756d732e546172676574496d7072657373696f6e53686172654c6f636174696f6e456e756d2e546172676574496d7072657373696f6e53686172654c6f636174696f6e12250a186c6f636174696f6e5f6672616374696f6e5f6d6963726f73180420012803480088010112230a166370635f6269645f6365696c696e675f6d6963726f731805200128034801880101421b0a195f6c6f636174696f6e5f6672616374696f6e5f6d6963726f7342190a175f6370635f6269645f6365696c696e675f6d6963726f7322b2010a0a546172676574526f617312180a0b7461726765745f726f6173180420012801480088010112230a166370635f6269645f6365696c696e675f6d6963726f73180520012803480188010112210a146370635f6269645f666c6f6f725f6d6963726f731806200128034802880101420e0a0c5f7461726765745f726f617342190a175f6370635f6269645f6365696c696e675f6d6963726f7342170a155f6370635f6269645f666c6f6f725f6d6963726f732287010a0b5461726765745370656e6412200a137461726765745f7370656e645f6d6963726f73180320012803480088010112230a166370635f6269645f6365696c696e675f6d6963726f73180420012803480188010142160a145f7461726765745f7370656e645f6d6963726f7342190a175f6370635f6269645f6365696c696e675f6d6963726f732288010a0a50657263656e7443706312230a166370635f6269645f6365696c696e675f6d6963726f73180320012803480088010112210a14656e68616e6365645f6370635f656e61626c6564180420012808480188010142190a175f6370635f6269645f6365696c696e675f6d6963726f7342170a155f656e68616e6365645f6370635f656e61626c656442e7010a22636f6d2e676f6f676c652e6164732e676f6f676c656164732e76352e636f6d6d6f6e420c42696464696e6750726f746f50015a44676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76352f636f6d6d6f6e3b636f6d6d6f6ea20203474141aa021e476f6f676c652e4164732e476f6f676c654164732e56352e436f6d6d6f6eca021e476f6f676c655c4164735c476f6f676c654164735c56355c436f6d6d6f6eea0222476f6f676c653a3a4164733a3a476f6f676c654164733a3a56353a3a436f6d6d6f6e620670726f746f330ac4030a3b676f6f676c652f6164732f676f6f676c656164732f76352f656e756d732f62696464696e675f73747261746567795f7374617475732e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76352e656e756d73226c0a1942696464696e675374726174656779537461747573456e756d224f0a1542696464696e675374726174656779537461747573120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120b0a07454e41424c45441002120b0a0752454d4f564544100442ef010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76352e656e756d73421a42696464696e67537472617465677953746174757350726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76352f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56352e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56355c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56353a3a456e756d73620670726f746f330ad1050a39676f6f676c652f6164732f676f6f676c656164732f76352f656e756d732f62696464696e675f73747261746567795f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76352e656e756d7322fc020a1742696464696e67537472617465677954797065456e756d22e0020a1342696464696e67537472617465677954797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120e0a0a434f4d4d495353494f4e101012100a0c454e48414e4345445f4350431002120e0a0a4d414e55414c5f4350431003120e0a0a4d414e55414c5f43504d1004120e0a0a4d414e55414c5f435056100d12180a144d4158494d495a455f434f4e56455253494f4e53100a121d0a194d4158494d495a455f434f4e56455253494f4e5f56414c5545100b12150a11504147455f4f4e455f50524f4d4f5445441005120f0a0b50455243454e545f435043100c120e0a0a5441524745545f4350411006120e0a0a5441524745545f43504d100e121b0a175441524745545f494d5052455353494f4e5f5348415245100f12180a145441524745545f4f555452414e4b5f53484152451007120f0a0b5441524745545f524f4153100812100a0c5441524745545f5350454e44100942ed010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76352e656e756d73421842696464696e6753747261746567795479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76352f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56352e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56355c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56353a3a456e756d73620670726f746f330aba0c0a38676f6f676c652f6164732f676f6f676c656164732f76352f7265736f75726365732f62696464696e675f73747261746567792e70726f746f1221676f6f676c652e6164732e676f6f676c656164732e76352e7265736f75726365731a3b676f6f676c652f6164732f676f6f676c656164732f76352f656e756d732f62696464696e675f73747261746567795f7374617475732e70726f746f1a39676f6f676c652f6164732f676f6f676c656164732f76352f656e756d732f62696464696e675f73747261746567795f747970652e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22fc070a0f42696464696e67537472617465677912470a0d7265736f757263655f6e616d651801200128094230e04105fa412a0a28676f6f676c656164732e676f6f676c65617069732e636f6d2f42696464696e67537472617465677912140a0269641810200128034203e04103480188010112110a046e616d65181120012809480288010112630a06737461747573180f2001280e324e2e676f6f676c652e6164732e676f6f676c656164732e76352e656e756d732e42696464696e675374726174656779537461747573456e756d2e42696464696e6753747261746567795374617475734203e04103125d0a047479706518052001280e324a2e676f6f676c652e6164732e676f6f676c656164732e76352e656e756d732e42696464696e67537472617465677954797065456e756d2e42696464696e675374726174656779547970654203e0410312290a176566666563746976655f63757272656e63795f636f64651814200128094203e04103480388010112200a0e63616d706169676e5f636f756e741812200128034203e041034804880101122c0a1a6e6f6e5f72656d6f7665645f63616d706169676e5f636f756e741813200128034203e04103480588010112430a0c656e68616e6365645f63706318072001280b322b2e676f6f676c652e6164732e676f6f676c656164732e76352e636f6d6d6f6e2e456e68616e6365644370634800123f0a0a7461726765745f63706118092001280b32292e676f6f676c652e6164732e676f6f676c656164732e76352e636f6d6d6f6e2e546172676574437061480012580a177461726765745f696d7072657373696f6e5f736861726518302001280b32352e676f6f676c652e6164732e676f6f676c656164732e76352e636f6d6d6f6e2e546172676574496d7072657373696f6e5368617265480012410a0b7461726765745f726f6173180b2001280b322a2e676f6f676c652e6164732e676f6f676c656164732e76352e636f6d6d6f6e2e546172676574526f6173480012430a0c7461726765745f7370656e64180c2001280b322b2e676f6f676c652e6164732e676f6f676c656164732e76352e636f6d6d6f6e2e5461726765745370656e6448003a68ea41650a28676f6f676c656164732e676f6f676c65617069732e636f6d2f42696464696e6753747261746567791239637573746f6d6572732f7b637573746f6d65727d2f62696464696e67537472617465676965732f7b62696464696e675f73747261746567797d42080a06736368656d6542050a035f696442070a055f6e616d65421a0a185f6566666563746976655f63757272656e63795f636f646542110a0f5f63616d706169676e5f636f756e74421d0a1b5f6e6f6e5f72656d6f7665645f63616d706169676e5f636f756e744281020a25636f6d2e676f6f676c652e6164732e676f6f676c656164732e76352e7265736f7572636573421442696464696e67537472617465677950726f746f50015a4a676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76352f7265736f75726365733b7265736f7572636573a20203474141aa0221476f6f676c652e4164732e476f6f676c654164732e56352e5265736f7572636573ca0221476f6f676c655c4164735c476f6f676c654164735c56355c5265736f7572636573ea0225476f6f676c653a3a4164733a3a476f6f676c654164733a3a56353a3a5265736f7572636573620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}

