<div class="grid 2xl:grid-cols-3 lg:grid-cols-2 gap-4 p-4">
    @foreach ($musics as $music)
        <div class="sm:w-3/5 w-full mx-auto sm:px-8 py-3 p-3 rounded-xl bg-purple-600">
            <div x-data="audioPlayer('{{ asset('storage/' . $music->song) }}')" class="2xl:flex items-center gap-4">
                <button @click="togglePlay" class="bg-white/25 p-2 rounded-full pulse">
                    <div class="bg-white/50 rounded-full p-2">
                        <div class="bg-white rounded-full p-0.5 focus:outline-none shadow-md">
                            <svg x-show="!isPlaying" class="text-purple-600" xmlns="http://www.w3.org/2000/svg"
                                width="32" height="32" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M8 17.175V6.825q0-.425.3-.713t.7-.287q.125 0 .263.037t.262.113l8.15 5.175q.225.15.338.375t.112.475t-.112.475t-.338.375l-8.15 5.175q-.125.075-.262.113T9 18.175q-.4 0-.7-.288t-.3-.712" />
                            </svg>
                            <svg x-show="isPlaying" class="text-purple-600" xmlns="http://www.w3.org/2000/svg"
                                width="32" height="32" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M6 16V8q0-.825.588-1.412T8 6h8q.825 0 1.413.588T18 8v8q0 .825-.587 1.413T16 18H8q-.825 0-1.412-.587T6 16" />
                            </svg>
                        </div>
                    </div>
                </button>
                <div class="flex-grow">
                    <div class="relative h-8">
                        <div class="absolute inset-0 flex items-center sm:space-x-1 space-x-0.5">
                            <template x-for="(height, index) in waveformHeights" :key="index">
                                <div class="w-0.5"
                                    :style="{
                                        height: `${height}%`,
                                        background: index / waveformHeights.length * 100 <= progress ?
                                            `linear-gradient(to right, #4498FB, #FD74D6)` : 'white',
                                        backgroundSize: '400% 100%',
                                        backgroundPosition: `${(index / waveformHeights.length * 100 - progress * 4) % 100}% 0`
                                    }">
                                </div>
                            </template>
                        </div>
                    </div>
                    <div class="text-white mt-1">{{ $music->title }}</div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<script>
    function audioPlayer(audioSrc) {
        return {
            audio: new Audio(audioSrc),
            isPlaying: false,
            progress: 0,
            waveformHeights: [],
            generateWaveform() {
                this.waveformHeights = Array.from({
                    length: 50
                }, () => Math.random() * 60 + 20);
            },
            togglePlay() {
                if (this.isPlaying) {
                    this.audio.pause();
                } else {
                    this.audio.play();
                }
                this.isPlaying = !this.isPlaying;
            },
            updateProgress() {
                this.progress = (this.audio.currentTime / this.audio.duration) * 100 || 0;
            },
            init() {
                this.generateWaveform();
                this.audio.addEventListener('timeupdate', () => this.updateProgress());
                this.audio.addEventListener('ended', () => {
                    this.isPlaying = false;
                    this.progress = 0;
                });
            }
        }
    }
    document.addEventListener('livewire:load', function() {
        Livewire.on('play', (audioSrc, title) => {
            const player = audioPlayer(audioSrc);
            player.init();
            player.togglePlay();
        });
    });
</script>
