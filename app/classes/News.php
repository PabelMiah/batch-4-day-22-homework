<?php

namespace App\classes;

class News
{
    protected $allCollections;
    protected $result = [];

    public function index()
    {
        return[
            0 => [
                'id' => 1,
                'category_id' =>1,
                'name' =>'বাপার আলোচনা সভা / সুন্দরবনকে ধীরে ধীরে মেরে ফেলা হচ্ছে',
                'description' => 'ঘূর্ণিঝড়ের মতো প্রাকৃতিক দুর্যোগের বড় আঘাত থেকে সুন্দরবন বাংলাদেশকে রক্ষা করে। জলবায়ু পরিবর্তনজনিত পরিস্থিতিতে এই বনকে রক্ষা করা...',
                'image' => 'assets/img/bd1.jpg',
            ],
            1 => [
                'id' => 2,
                'category_id' =>1,
                'name' =>'ইসি গঠনে যাঁদের নাম, কোন পেশার কতজন',
                'description' => 'নির্বাচন কমিশন (ইসি) গঠনের জন্য বিভিন্ন রাজনৈতিক দল, সংগঠন ও ব্যক্তি অনুসন্ধান কমিটির কাছে নাম জমা দিয়েছে। কমিটি সোম...',
                'image' => 'assets/img/bd2.jpg',
            ],
            2 => [
                'id' => 3,
                'category_id' =>1,
                'name' =>'রাস্তায় ম্যাজিস্ট্রেটকে মারধর করে আটক প্রবাসী',
                'description' => 'পুলিশ কর্মকর্তা মোখলেসুর রহমান বলেন, নগরের জিইসি মোড় এলাকায় স্ত্রীকে নিয়ে হাঁটছিলেন ওই ম্যাজিস্ট্রেট। এ সময় একটি...',
                'image' => 'assets/img/bd3.jpg',
            ],
            3 => [
                'id' => 4,
                'category_id' =>2,
                'name' =>'বিচিত্র / বিক্ষোভ ছত্রভঙ্গে সংগীত',
                'description' => 'করোনা মহামারি মোকাবিলায় এ পর্যন্ত যেসব দেশ সফল, তাদের অন্যতম নিউজিল্যান্ড। সংক্রমণ মোকাবিলায় কঠোর পদক্ষেপও নিয়েছে...',
                'image' => 'assets/img/bs1.jfif',
            ],
            4 => [
                'id' => 5,
                'category_id' =>2,
                'name' =>'কিয়েভ থেকে সরিয়ে নেওয়া হচ্ছে মার্কিন দূতাবাস',
                'description' => 'মার্কিন দূতাবাস কিয়েভ থেকে সরিয়ে নেওয়া হলেও ইউক্রেন সরকারের সঙ্গে কার্যক্রম চালিয়ে যাওয়া হবে বলে জানিয়েছেন ব্লিঙ্কেন। তিনি...',
                'image' => 'assets/img/bs2.jpeg',
            ],
            5 => [
                'id' => 6,
                'category_id' =>2,
                'name' =>'ইউরোপে উত্তেজনা / ন্যাটোর স্বপ্ন ত্যাগ করছে ইউক্রেন',
                'description' => 'ইউক্রেন সংকট সমাধানে রাশিয়ার সঙ্গে পশ্চিমা বিশ্ব তাদের কূটনৈতিক তৎপরতা অব্যাহত রেখেছে। এই পরিস্থিতি রাশিয়ার পক্ষ থেকে হুম...',
                'image' => 'assets/img/bs3.png',
            ],
            6 => [
                'id' => 7,
                'category_id' =>3,
                'name' =>'শ্রমিকের ডিজিটাল তথ্যভান্ডার করবে সরকার',
                'description' => 'ডিজিটাল তথ্যভান্ডার হলে কোন খাতে কত শ্রমিক কাজ করেন, তার প্রকৃত সংখ্যা জানা যাবে। শ্রমিকদের সব ধরনের সুযোগ-সুবিধা প্রদান...',
                'image' => 'assets/img/world1.jfif',
            ],
            7 => [
                'id' => 8,
                'category_id' =>3,
                'name' =>'নতুন নির্দেশনা জারি / কেন্দ্রীয় ব্যাংকের চেকের বিপরীতে ঋণ ছাড় নয়',
                'description' => 'কোনো কোনো আর্থিক প্রতিষ্ঠান ঋণের টাকা ছাড় করাতে বাংলাদেশ ব্যাংকের চেক ব্যবহার করছে। এর মাধ্যমে বাংলাদেশ ব্যাংকে রক্ষিত ওই আর্থিক...',
                'image' => 'assets/img/world2.jpg',
            ],
            8 => [
                'id' => 9,
                'category_id' =>3,
                'name' =>'ফুলের ব্যবসা / যশোরের কৃষক হাসে ফুল চাষে',
                'description' => 'ফুলচাষি হযরত আলী ৭৫০টি গোলাপ ফুল নিয়ে যশোরের ঝিকরগাছা উপজেলার গদখালী পাইকারি ফুলের মোকামে যান। সকাল আটটার...',
                'image' => 'assets/img/world3.jfif',
            ],
        ];


    }
    public function shortCollections ($categoryId)
    {
        $this->allCollections = $this->index();
        foreach ($this->allCollections as $news)
        {
            if ($news['category_id'] == $categoryId)
            {
                array_push($this->result, $news);

            }
        }
        return $this->result;
    }
    public function getCollectionsDetails ($collectionId)
    {
        $this->allCollections = $this->index();
        foreach ($this->allCollections as $news)
        {
            if ($news['id'] == $collectionId)
            {
                return $news;
            }
        }
    }

}